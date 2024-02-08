@extends('app')
@section('title', 'Tous nos biens')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" name="surface" id="surface" class="form-control" value="{{$input['surface'] ?? ''}}" placeholder="Surface min">
            <input type="number" name="price" id="price" class="form-control" value="{{$input['price'] ?? ''}}" placeholder="Budget max">
            <input type="number" name="rooms" id="rooms" class="form-control" value="{{$input['rooms'] ?? ''}}" placeholder="Nombre de pièces min">
            <input type="text" name="title" id="title" class="form-control" value="{{$input['title'] ?? ''}}" placeholder="Mot clé">
            <button class="btn btn-primary btn-sm flex-grow-0">
                Rechercher
            </button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="col">
                    Aucun résultat trouvé par rapport à votre recherche
                </div>
            @endforelse
        </div>
        <div class="my-4">
            {{$properties->links()}}
        </div>
    </div>

@endsection
