@extends('app')

@section('title', 'Accueil')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence Immobilier</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore assumenda ipsa sapiente rem perspiciatis tenetur voluptate eum iste quis, ab nobis? Voluptatem adipisci alias quas? Temporibus enim officia rerum sint?
            </p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
