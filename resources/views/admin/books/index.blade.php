@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h3>
        @if(Auth::user()->usertype == 'admin')
            <a class="btn btn-secondary" href="/books/create">Add Book</a>
        @endif
    </h3>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Status</th>
            <th>Publication Date</th>
            <th>Created At</th>
            <th>Updated At</th>
            @if(Auth::user()->usertype == 'admin')
                <th colspan="2">Actions</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->description }}</td>
            <td>
                @if($book->is_borrowed)
                    <span class="text-danger">Borrowed</span>
                @else
                    <span class="text-success">Available</span>
                @endif
            </td>
            <td>{{ $book->publication_date }}</td>
            <td>{{ $book->created_at }}</td>
            <td>{{ $book->updated_at }}</td>

            <!-- Actions for admin only -->
            @if(Auth::user()->usertype == 'admin')
            <td><a class="btn btn-primary" href="/books/{{$book['id']}}/edit">Edit</a></td>
            <td>
                <form action="/books/{{$book['id']}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete this book?');">
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
