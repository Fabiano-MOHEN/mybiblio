@extends('layout')
@section('title', 'store books')

@section('body')
    <h1>Info sur le livre {{$book->title}}</h1>

    <div class="d-flex flex-wrap justify-center gap-4">

        <div class="card" style="width: 18rem;">
            <img src="/storage/{{ $book->photo }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                <p class="card-text">{{ $book->price }}</p>
                <p class="card-text">{{ $book->category->name }}</p>

            </div>
        </div>

        {{-- action add edit button ans delete form --}}


                <h5 class="card-title">Action</h5>
                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Modifier</a>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Retour</a>

@endsection
{{-- livre similaire selon categorie ---}}
