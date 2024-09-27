@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-8 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-700">Add a New Book</h2>

    <form method="post" action="/books" class="space-y-6">
        @csrf

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title *</label>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter book title"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Author Input -->
        <div>
            <label for="author" class="block text-sm font-medium text-gray-700">Author *</label>
            <input type="text" name="author" value="{{ old('author') }}" placeholder="Enter author's name"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" placeholder="Enter description"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('description') }}</textarea>
        </div>

        <!-- Publication Date Input -->
        <div>
            <label for="publication_date" class="block text-sm font-medium text-gray-700">Publication Date</label>
            <input type="date" name="publication_date" value="{{ old('publication_date') }}"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition">
                Add Book
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
