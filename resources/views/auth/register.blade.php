
@extends('layout')


@section('title', 'innscription')


@section('body')
<h1>inscription</h1>


<form action="" method="post">
    @csrf

    @component('components.input',
                    ['name' => 'name', 'label' => 'Nom et prenom', 'value' => old('name')])
    @endcomponent

    @component('components.input',
    ['name' => 'email', 'label' => 'Votre email', 'value' => old('email'), 'type' => 'email'])
    @endcomponent

    @component('components.input',
    ['name' => 'password', 'label' => 'Votre mot de passe', 'value' => old('password'), 'type' => 'password'])
    @endcomponent


    <button type="submit" class="btnn btn-primary">Inscription</button>
</form>

@endsection
