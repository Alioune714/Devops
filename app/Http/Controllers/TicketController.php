<?php

namespace App\Http\Controllers;

use App\Models\Ticket; // Ajouter cette ligne pour importer le modèle Ticket
use App\Models\Comment; // Assurez-vous d'importer le modèle Comment si vous l'avez créé
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Afficher la liste des tickets
    public function index()
    {
        $tickets = Ticket::all(); // Récupérer tous les tickets
        dd($tickets);  // Vérifie si les tickets sont bien récupéré
        return view('tickets.index', compact('tickets'));
    }

    // Afficher le formulaire de création de ticket
    public function create()
    {
        return view('tickets.create');
    }

    // Sauvegarder un nouveau ticket
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:Faible,Moyenne,Élevée,Critique',
            'status' => 'required|in:Ouvert,En cours,Résolu,Fermé',
        ]);
         // Vérifier les données avant de les enregistrer
    dd($request->all());

        Ticket::create([
            'titre' => $request->titre, // Assurez-vous d'utiliser 'titre' et non 'title'
            'description' => $request->description,
            'statut' => 'Ouvert', // Par défaut, le ticket est "Ouvert"
            'id_employe' => auth()->id(), // L'utilisateur connecté
            'priorité' => $request->priority,  // Priorité du ticket
        'date_creation' => now(),  // Date de création par défaut
        'date_mise_a_jour' => null,  // Pas de mise à jour pour l'instant
        
        'id_technicien' => null,  // Pas de technicien assigné au départ
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket créé avec succès');
    }

    // Ajouter un commentaire à un ticket
    public function addComment(Request $request, $ticketId)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $ticket = Ticket::findOrFail($ticketId);

        // Ajouter un commentaire
        Comment::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        // Retourner à la page du ticket
        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Commentaire ajouté');
    }

    // Afficher un ticket spécifique
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    // Modifier un ticket
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    // Mettre à jour un ticket
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $ticket->update([
            'titre' => $request->titre, // Utilisez 'titre' et non 'title'
            'description' => $request->description,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket mis à jour avec succès');
    }

    // Supprimer un ticket
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket supprimé avec succès');
    }
}
