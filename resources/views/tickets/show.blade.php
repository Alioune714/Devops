@extends('layouts.app')

@section('content')
    <h1>{{ $ticket->title }}</h1>
    <p>{{ $ticket->description }}</p>
    <p>État: {{ $ticket->status }}</p>
    <p>Créé par: {{ $ticket->user->name }}</p>
@endsection
<form action="{{ route('tickets.addComment', $ticket->id) }}" method="POST">
    @csrf
    <textarea name="comment" rows="3" required></textarea>
    <button type="submit">Ajouter un commentaire</button>
</form>

<h3>Commentaires</h3>
@foreach($ticket->comments as $comment)
    <div>
        <strong>{{ $comment->user->name }}:</strong>
        <p>{{ $comment->comment }}</p>
    </div>
@endforeach
