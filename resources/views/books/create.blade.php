<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12 lg:py-16">
        <div class="w-full mx-auto sm:px-6 lg:px-12 space-y-6">
            <div class="p-6 sm:p-10 lg:p-12 bg-white shadow sm:rounded-lg">
                <form method="POST" action="{{ route('books.store') }}">
                    @csrf
                    <!-- Title -->
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title" placeholder="Title" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"><br><br>

                    <!-- Author -->
                    <label for="author">Author</label>
                    <input id="author" type="text" name="author" placeholder="Author" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"><br><br>

                    <!-- Description -->
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" cols="50" placeholder="Description" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                    <br><br>

                    <!-- Publication Date -->
                    <label for="publication_date">Publication Date</label>
                    <input id="publication_date" type="date" name="publication_date" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"><br><br>

                    <!-- Submit Button -->
                    <input class="btn btn-outline-primary btn-lg" type="submit" value="Add Book">
                </form>

                <!-- Error Display -->
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="color:red;">{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
