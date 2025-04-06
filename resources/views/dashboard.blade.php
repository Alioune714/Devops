<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1: Ticket Stats -->
                        <div class="bg-blue-600 p-6 rounded-lg shadow-lg text-white">
                            <h3 class="text-xl font-semibold mb-3">Tickets Ouverts</h3>
                            <p class="text-3xl font-bold">50</p>
                            <p class="mt-4 text-gray-200">Nombre total de tickets ouverts actuellement.</p>
                        </div>
                        <!-- Card 2: User Stats -->
                        <div class="bg-green-600 p-6 rounded-lg shadow-lg text-white">
                            <h3 class="text-xl font-semibold mb-3">Techniciens Disponibles</h3>
                            <p class="text-3xl font-bold">5</p>
                            <p class="mt-4 text-gray-200">Nombre total de techniciens disponibles pour résoudre les tickets.</p>
                        </div>
                        <!-- Card 3: Resolution Time -->
                        <div class="bg-yellow-600 p-6 rounded-lg shadow-lg text-white">
                            <h3 class="text-xl font-semibold mb-3">Temps Moyen de Résolution</h3>
                            <p class="text-3xl font-bold">2h 30m</p>
                            <p class="mt-4 text-gray-200">Temps moyen nécessaire pour résoudre un ticket.</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Bienvenue, {{ auth()->user()->name }} !</h3>
                        <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                            Vous êtes connecté et prêt à gérer vos tickets. Voici quelques informations clés concernant votre plateforme.
                        </p>
                    </div>

                    <div class="mt-8 flex justify-between items-center">
                        <a href="{{ route('tickets.index') }}" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">
                            Voir mes tickets
                        </a>
                        <a href="{{ route('tickets.create') }}" class="inline-block bg-green-600 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-green-700 transition duration-300">
                            Créer un ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
