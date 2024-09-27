<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">

            <!-- Sidebar -->
            <div class="bg-gray-300 w-1/4 p-6 rounded-lg shadow-sm mr-4">
                <h3 class="mb-6 font-bold text-xl border-b pb-2 text-gray-700">Admin Command Center</h3>
                <ul class="list-none space-y-4">
                    <li>
                        <a href="{{ route('borrowed.books') }}" class="block w-full text-center py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                            View Borrowed Books
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('books.index') }}" class="block w-full text-center py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                            Manage Books
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('all.users') }}" class="block w-full text-center py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                            Manage Users
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="w-3/4 bg-white p-6 overflow-hidden shadow-lg sm:rounded-lg">
                <!-- Centered Hello, User -->
                <div class="flex justify-center items-center h-24 bg-gray-100 rounded shadow-sm mb-4">
                    <h1 class="text-2xl font-semibold">Hello, {{ Auth::user()->name }}</h1>
                </div>

                <!-- Admin Welcome Message -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in as Admin!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
