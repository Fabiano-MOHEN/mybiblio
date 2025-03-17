@
@extends('layout')
@section('title', 'connexion')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@section('body')
<h1>connexion</h1>

<form action="" method="post">
    @csrf

@component('components.input',
    ['name' => 'email', 'label' => 'Votre email', 'value' => old('email'), 'type' => 'email'])
    @endcomponent

    @component('components.input',
    ['name' => 'password', 'label' => 'Votre mot de passe', 'value' => old('password'), 'type' => 'password'])
    @endcomponent

    <button type="submit" class="btn btn-primary">connexion</button>
    <span>Vous n'avez pas de compte ? <a href="/register">Inscrivez-vous</a></span>

  

</form>

@endsection


