@extends('admin.admin')

@section('title', $property->exists? 'Modifier un bien' : 'Ajouter un bien')

@section('content')

    <h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{route($property->exists? 'admin.property.update' : 'admin.property.store', $property)}}" method="post">
        @csrf
        @method($property->exists? 'put' : 'post')

        <div class="row">
            @include('partials.input', ['class' => 'col', 'label' => 'Titre', 'name' => 'title', 'value' => $property->title])
            <div class="col row">
                @include('partials.input', ['class' => 'col', 'name' => 'surface', 'value' => $property->surface])
                @include('partials.input', ['class' => 'col', 'name' => 'price', 'label' => 'Prix', 'value' => $property->price])
            </div>
        </div>
        @include('partials.input', ['class' => 'col', 'type' => 'textarea', 'name' => 'description', 'value' => $property->description])
        <div class="row">
            @include('partials.input', ['class' => 'col', 'name' => 'rooms', 'label' => 'Pièces', 'value' => $property->rooms])
            @include('partials.input', ['class' => 'col', 'name' => 'bedrooms', 'label' => 'Chambres', 'value' => $property->bedrooms])
            @include('partials.input', ['class' => 'col', 'name' => 'floor', 'label' => 'Etage', 'value' => $property->floor])
        </div>
        <div class="row">
            @include('partials.input', ['class' => 'col', 'name' => 'address', 'label' => 'Adresse', 'value' => $property->address])
            @include('partials.input', ['class' => 'col', 'name' => 'city', 'label' => 'Ville', 'value' => $property->city])
            @include('partials.input', ['class' => 'col', 'name' => 'postal_code', 'label' => 'Code postal', 'value' => $property->postal_code])
        </div>
        @include('partials.checkbox', ['name' => 'sold', 'label' => 'Vendu', 'value' => $property->sold])



        <div>
            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Ajouter
                @endif
            </button>
        </div>
    </form>
@endsection
