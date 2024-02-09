@extends('app')

@section('title', 'Connexion')

@section('content')

    <div class="container mt-5">
        <h1>@yield('title')</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="my-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form class="vstack gap-3" action="{{route('login')}}" method="post">
            @csrf
            @include('partials.input', ['type' => 'email', 'class' => 'col', 'name' => 'email', 'label' => 'Email'])
            @include('partials.input', ['type' => 'password', 'class' => 'col', 'name' => 'password', 'label' => 'Mot de passe'])

            <button class="btn btn-primary">
                Se connecter
            </button>
        </form>
    </div>

@endsection
