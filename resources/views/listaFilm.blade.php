@extends('layouts.app')
 
@section('page-title','Home Page')

@section('content')
    <main>
        <div class="film">
            <div class="container">
                @foreach ($lista_film as $indice => $elemento)
                <div class="card">
                    <div class="text">
                        <p><strong>Titolo:</strong> {{ $elemento['title'] }}</p>
                        <p><strong>Titolo originale:</strong> {{ $elemento['original_title'] }}</p>
                        <p><strong>Data uscita:</strong> {{ $elemento['date'] }}</p>
                        <p><strong>Voto:</strong> {{ $elemento['vote'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div> 
    </main>
@endsection