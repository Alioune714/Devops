@extends('layouts.app')

@section('content')
    <h1>Ajouter un utilisateur</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Nom:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Créer</button>
    </form>
@endsection
5. Authentification et Rôles
Si tu as déjà configuré l'authentification, tu peux ajouter une logique de contrôle d'accès en fonction des rôles des utilisateurs (Admin, Employé, Technicien).

Exemple de middleware pour un rôle spécifique :

php
Copier
Modifier
// Dans ton contrôleur
public function __construct()
{
    $this->middleware('role:admin'); // Limiter l'accès aux admins
}