@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('books.books') }}</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3">{{ __('books.add_new_book') }}</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>{{ __('books.book_name') }}</th>
                <th>{{ __('books.author_name') }}</th>
                <th>{{ __('books.pages') }}</th>
                <th>{{ __('books.description') }}</th>
                <th>{{ __('books.picture') }}</th>
                <th>{{ __('books.external_link') }}</th>
                <th>{{ __('books.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->book_name }}</td>
                    <td>{{ $book->author_name }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->description }}</td>
                    <td><img src="{{ asset('storage/' . $book->picture) }}" alt="{{ $book->book_name }}" width="50"></td>
                    <td><a href="{{ $book->external_link }}" target="_blank">{{ __('books.external_link') }}</a></td>
                    <td>
                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning">{{ __('books.edit') }}</a>
                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('books.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
