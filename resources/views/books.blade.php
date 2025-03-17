@extends('layouts.app')

@section('title', "Liste des Livres")

@section('content')
    <div class="max-w-5xl mx-auto bg-white p-6 shadow-lg rounded-lg">

        @if ($books->isEmpty())
            <p class="text-gray-500">Aucun livre disponible.</p>
        @else
            <h1 class="text-3xl font-bold mb-6 text-gray-800">📚 Liste des Livres ({{ $books->count() }})</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                    <tr>
                        <th class=" px-4 text-left text-gray-700 font-semibold">ID</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold">Titre</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold">Auteur</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold">Date de publication</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr onclick="window.location='{{ url('/book/' . $book->id) }}';" class="cursor-pointer bg-white hover:bg-gray-100 transition duration-200 overflow-hidden">
                            <td class="py-3 px-4 border-b border-gray-300">{{ $book->id }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 font-semibold">{{ $book->title }}</td>
                            <td class="py-3 px-4 border-b border-gray-300">{{ $book->author }}</td>
                            <td class="py-3 px-4 border-b border-gray-300">{{ $book->publish_date }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-sm text-gray-600 max-w-[350px] truncate ">{{ $book->description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
