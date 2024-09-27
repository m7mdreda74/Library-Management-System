@extends('layouts.app')

@section('content')

<style>
    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        padding: 10px 0;
    }

    li span {
        font-weight: bold;
        color: #333;
        margin-right: 10px;
    }

    .book-details {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .btn-group {
        margin-top: 20px;
    }
</style>

<div class="book-details">
    <ul>
        <li><span>No.:</span> {{ $book->id }}</li>
        <li><span>Title:</span> {{ $book->title }}</li>
        <li><span>Author:</span> {{ $book->author }}</li>
        <li><span>Description:</span> {{ $book->description }}</li>
        <li><span>Adding date:</span> {{ $book->created_at }}</li>
        <li><span>Updating date:</span> {{ $book->updated_at }}</li>

        @if(!$book->borrowed_by)
        <li>
            <form method="post" action="{{ route('books.borrow', $book->id) }}">
                @csrf
                <input type="submit" value="Borrow" class="btn btn-primary" onclick="return confirm('Are you sure you want to borrow this book?');">
            </form>
        </li>
        @elseif($book->borrowed_by == auth()->id())
        <li>
            <form method="post" action="{{ route('books.return', $book->id) }}">
                @csrf
                <input type="submit" value="Return this book" class="btn btn-warning" onclick="return confirm('Are you sure you want to return this book?');">
            </form>
        </li>
        @else
        <li>
            <p class="text-danger">This book is currently borrowed by another student.</p>
        </li>
        @endif
    </ul>
</div>

@endsection
