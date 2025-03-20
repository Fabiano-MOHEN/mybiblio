@extends('layout')
@section('title', 'ajouter un livre')

@section('body')
<form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    @component('components.input', ['name' => 'title', 'label' => 'Titre', 'value' => old('title')])
    @endcomponent

    @component('components.input', ['name' => 'author', 'label' => 'Auteur', 'value' => old('author')])
    @endcomponent

    @component('components.input', ['name' => 'nbpages', 'label' => 'Nombre de pages', 'value' => old('nbpages')])
    @endcomponent

    @component('components.input', ['name' => 'resume', 'label' => 'Résumé', 'value' => old('resume')])
    @endcomponent

    @component('components.input', ['name' => 'price', 'label' => 'Prix', 'value' => old('price')])
    @endcomponent

    <div>
        <label for="photo">Photo de couverture</label>
        <input type="file" name="photo" id="photo">
    </div>

    <select name="category_id" id="category">
        @foreach($categories as $category)
         <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Ajouter le livre</button>
</form>
@endsection
