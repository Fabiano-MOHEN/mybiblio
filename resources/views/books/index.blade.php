@extends('layout')
@section('title', 'store books')


@section('body')
    <h1>store books</h1>

    <aside>
        <h2>Search by term</h2>
        <form action="{{ route('books.index') }}" method="GET">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title ">
            <button type="submit">Search</button>
    </aside>

    <aside>
        <h2>Categories</h2>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{ route('books.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </aside>
    <ul>

    </ul>
    <div class="d-flex flex-wrap justify-center gap-4">
        @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            <img src="storage/{{ $book->photo }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                <p class="card-text">{{ $book->price }}</p>
                <p class="card-text">{{ $book->category->name }}</p>
                <a href="{{route('books.show', $book)}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{-- add pagination with categry_id query param}}
        {{-- {{ $books->appends(['category_id' => request('category_id')])->links() }} --}}
        {{ $books->withQueryString()->links() }}

    </div>
@endsection
