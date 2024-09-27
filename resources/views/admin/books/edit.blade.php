@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-8 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-700">Edit Book Details</h2>

    <form method="post" action="/books/{{$book['id']}}" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title *</label>
            <input type="text" name="title" value="{{ old('title', $book['title']) }}" placeholder="Enter book title"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('title')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Author Input -->
        <div>
            <label for="author" class="block text-sm font-medium text-gray-700">Author *</label>
            <input type="text" name="author" value="{{ old('author', $book['author']) }}" placeholder="Enter author's name"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('author')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="2" placeholder="Enter description"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('description', $book['description']) }}</textarea>
            @error('description')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Publication Date Input -->
        <div>
            <label for="publication_date" class="block text-sm font-medium text-gray-700">Publication Date</label>
            <input type="date" name="publication_date" value="{{ old('publication_date', $book['publication_date']) }}"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('publication_date')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition">
                Update Book
            </button>
        </div>
    </form>

    <!-- Error Display -->
    @if($errors->any())
    <ul class="mt-6">
        @foreach($errors->all() as $error)
        <li class="text-red-600">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
