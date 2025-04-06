@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-r from-blue-600 via-blue-400 to-blue-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-black mb-6">Bienvenue sur notre plateforme de gestion des tickets</h1>
            <p class="text-lg text-black mb-8">Gérez facilement vos tickets, suivez leur statut et résolvez vos problèmes en un clin d'œil.</p>
            
            @auth
                <p class="text-black text-xl mb-6">Vous êtes connecté. <a href="{{ route('tickets.index') }}" class="text-blue-100 hover:text-blue-300">Voir vos tickets</a></p>
            @else
                <div class="text-white">
                    <p class="text-lg mb-6">Vous devez vous connecter pour accéder à la gestion des tickets.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('login') }}" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">Se connecter</a>
                        <a href="{{ route('register') }}" class="inline-block bg-green-600 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-green-700 transition duration-300">S'inscrire</a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
    
    <!-- Optionally, add an image or description section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-semibold text-gray-900 text-center mb-6">Comment ça marche ?</h2>
            <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0 md:space-x-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center w-full md:w-1/3">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Soumettre un ticket</h3>
                    <p class="text-gray-600 mb-4">Décrivez votre problème ou demande et soumettez-le facilement.</p>
                    <a href="{{ route('tickets.create') }}" class="text-blue-600 hover:text-blue-800">Créer un ticket</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center w-full md:w-1/3">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Suivi des tickets</h3>
                    <p class="text-gray-600 mb-4">Suivez l'évolution de vos tickets en temps réel et restez informé.</p>
                    <a href="{{ route('tickets.index') }}" class="text-blue-600 hover:text-blue-800">Voir mes tickets</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center w-full md:w-1/3">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Assistance rapide</h3>
                    <p class="text-gray-600 mb-4">Notre équipe de techniciens est là pour résoudre vos problèmes le plus rapidement possible.</p>
                    <a href="{{ route('tickets.index') }}" class="text-blue-600 hover:text-blue-800">Voir l'aide</a>
                </div>
            </div>
        </div>
    </div>
@endsection
