@extends('admin.admin')

@section('title', $option->exists? 'Modifier une option' : 'Ajouter une option')

@section('content')

    <h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{route($option->exists? 'admin.option.update' : 'admin.option.store', $option)}}" method="post">
        @csrf
        @method($option->exists? 'put' : 'post')

        @include('partials.input', ['name' => 'name', 'label' => 'Nom', 'value' => $option->name])



        <div>
            <button class="btn btn-primary">
                @if ($option->exists)
                    Modifier
                @else
                    Ajouter
                @endif
            </button>
        </div>
    </form>
@endsection
