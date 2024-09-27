<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12 lg:py-16">
        <div class="w-full mx-auto sm:px-6 lg:px-12 space-y-6">
            <div class="p-6 sm:p-10 lg:p-12 bg-white shadow sm:rounded-lg">

                <!-- Back Button -->
                <a href="{{ url()->previous() }}" class="btn btn-primary mb-4">
                    Back
                </a>

                @if($student)
                <div class="mb-4">
                    <p><strong>ID:</strong> {{ $student->id }}</p>
                    <hr>
                    <p><strong>Name:</strong> {{ $student->name }}</p>
                    <hr>
                    <p><strong>Email:</strong> {{ $student->email }}</p>
                </div>
                @else
                <p class="text-red-500">No student found with the provided ID.</p>
                <a href="{{ route('all.students') }}" class="btn btn-outline-secondary">
                    Search for another student
                </a>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
