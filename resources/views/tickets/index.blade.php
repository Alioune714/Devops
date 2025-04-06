@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Mes Tickets</h1>

        <!-- Message de succès si un ticket a été créé ou supprimé -->
        @if (session('success'))
            <div class="mb-6 text-green-600 p-4 bg-green-100 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($tickets as $ticket)
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-semibold text-gray-900">{{ $ticket->titre }}</h2>
                    <p class="mt-2 text-sm text-gray-600">{{ \Str::limit($ticket->description, 100) }}</p>
                    <p class="mt-2 text-sm text-gray-500">Statut: <span class="font-medium">{{ $ticket->statut }}</span></p>
                    <div class="mt-4 flex justify-end">
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="text-blue-600 hover:text-blue-700">Voir les détails</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
