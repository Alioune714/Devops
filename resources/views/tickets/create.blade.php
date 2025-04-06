@extends('layouts.app')

@section('content')
    <h1>Créer un Nouveau Ticket</h1>

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="priority">Priorité</label>
            <select id="priority" name="priority">
                <option value="Faible">Faible</option>
                <option value="Moyenne">Moyenne</option>
                <option value="Élevée">Élevée</option>
                <option value="Critique">Critique</option>
            </select>
        </div>
        <div>
            <label for="status">Statut</label>
            <select id="status" name="status">
                <option value="Ouvert">Ouvert</option>
                <option value="En cours">En cours</option>
                <option value="Résolu">Résolu</option>
                <option value="Fermé">Fermé</option>
            </select>
        </div>
        <div>
            <button type="submit">Créer Ticket</button>
        </div>
    </form>
@endsection
