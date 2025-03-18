@extends('layouts.app')

@section('title', "Détails du livre")

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md grid grid-cols-5 space-x-4">
        <div class="col-span-1">
            <img src="/seneque.webp" alt="seneque" class="mt-4 w-full rounded-l-full select-none">
        </div>
        <div class="col-span-3">
            <h1 class="text-2xl font-bold mb-4">{{ $book->title }}</h1>
            <p><strong>Auteur :</strong> {{ $book->author }}</p>
            <p><strong>Date de publication :</strong> {{ $book->publish_date }}</p>
            <p class="mt-4">{{ $book->description }}</p>
        </div>
        <div class="col-span-1">
            <img src="/seneque.webp" alt="seneque" class="mt-4 w-full rounded-l-full scale-x-[-1] select-none">
        </div>
    </div>
@endsection
