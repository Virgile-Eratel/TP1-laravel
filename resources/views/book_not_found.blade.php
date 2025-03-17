@extends('layouts.app')

@section('title', "Erreur 404")

@section('content')
    <div class="w-full flex justify-center space-y-2">
        <div>
        <h1>Erreur 404</h1>
        <p>Le livre avec l'ID {{ $id }} n'existe pas.</p>
        </div>
    </div>
@endsection
