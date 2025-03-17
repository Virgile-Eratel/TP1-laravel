@extends('layouts.app')

@section('title', "Détails du livre")

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">{{ $book->title }}</h1>
        <p><strong>Auteur :</strong> {{ $book->author }}</p>
        <p><strong>Date de publication :</strong> {{ $book->publish_date }}</p>
        <p class="mt-4">{{ $book->description }}</p>
    </div>
@endsection
