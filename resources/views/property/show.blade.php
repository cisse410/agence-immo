@extends('app')

@section('title', $property->title)

@section('content')
    <div class="container mt-4">
        <h1> {{$property->title }}</h1>
        <h2> {{$property->rooms }} pièces - {{ $property->surface }} m²</h2>
        <div class="text-primary font-weight-bold" style="font-size: 4rem">
            {{ number_format($property->price, thousands_separator: ' ') }} FCFA
        </div>
        <hr>
        <div class="mt-4">
            <h4>Intéressé par ce bien? </h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{route('property.contact', $property)}}" method="post" class="vstack gap-3">
                @csrf
                <div class="row">
                    @include('partials.input', ['class' => 'col', 'name' => 'firstname', 'label' => 'Prénom', 'value' => 'John'])
                    @include('partials.input', ['class' => 'col', 'name' => 'lastname', 'label' => 'Nom', 'value' => 'Doe'])
                </div>
                <div class="row">
                    @include('partials.input', ['class' => 'col', 'name' => 'phone', 'label' => 'Téléphone'])
                    @include('partials.input', ['type' => 'email', 'class' => 'col', 'name' => 'email', 'label' => 'Email'])
                </div>
                @include('partials.input', ['type' => 'textarea', 'class' => 'col', 'name' => 'message', 'label' => 'Votre message', 'value' => 'Contenu de mon message'])
                <div>
                    <button class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>

        <div class="mt-4">
            <p>{{ nl2br($property->description) }}</p>
        </div>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface de la maison</td>
                        <td>{{ $property->surface }}</td>
                    </tr>
                    <tr>
                        <td>Nombre de pièces</td>
                        <td>{{ $property->rooms }}</td>
                    </tr>
                    <tr>
                        <td>Nombre de chambre</td>
                        <td>{{ $property->bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ $property->floor ?: 'Rez de chaussée' }}</td>
                    </tr>
                    <tr>
                        <td>Localisation de la maison</td>
                        <td>
                            {{ $property->address }}
                            {{ $property->city }} {{ $property->postal_code }}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h2>Spécifités</h2>
                <ul class="list-group">
                    @forelse ($property->options as $option)
                        <li class="list-group-item">
                            {{ $option->name}}
                        </li>
                    @empty
                        <div class="list-group-item">
                            Rien à  afficher ici
                        </div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
