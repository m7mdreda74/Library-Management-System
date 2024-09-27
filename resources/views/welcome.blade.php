<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Welcome to the Online Library') }}
            </h2>

            @if (Route::has('login'))
            <div class="flex space-x-4">
                @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-4">
                    Dashboard
                </a>
                @else
                <div class="link-box">
                    <a href="{{ route('login') }}" class="link">
                        Log in
                    </a>
                </div>

                @if (Route::has('register'))
                <div class="link-box">
                    <a href="{{ route('register') }}" class="link">
                        Register
                    </a>
                </div>
                @endif

                @endauth
            </div>
            @endif
        </div>
    </x-slot>

    <div class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12 space-y-6">
            <div class="p-6 sm:p-10 lg:p-12 bg-white shadow sm:rounded-lg">
                <!-- Hero Section -->
                <div class="flex justify-center items-center h-24 bg-blue-200 rounded shadow-sm">
                    <h1 class="text-2xl font-semibold">Welcome to our Online Library</h1>
                </div>

                <!-- About Section -->
                <div class="mt-6 text-gray-700">
                    <p>
                        "The Online Library is not just another digital platform—it's a gateway to a universe of knowledge,
                        available at the fingertips of every individual. Our vast and eclectic collection spans across books,
                        magazines, and various other enriching materials tailored to cater to diverse reading appetites.
                    </p>
                    <p class="mt-4">
                        Not only can you delve into the intricate details of each book, but you're also empowered to borrow them
                        and keep track of your reading journey through a personalized list of borrowed titles. To enhance your
                        experience, we provide every user with their own dashboard and profile, ensuring a seamless and
                        customizable browsing journey.
                    </p>
                    <p class="mt-4">
                        Join us, and embrace the limitless possibilities that come with having a world of information right at your beck and call."
                    </p>
                </div>

                <!-- Buttons Section -->
                <div class="mt-6 flex justify-center space-x-6">
                    @auth
                    <a href="/home" class="btn btn-primary px-4 py-2 text-white rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                        Browse the catalog
                    </a>
                    @else
                    <a href="/home" class="btn btn-primary px-4 py-2 text-white rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                        Browse the catalog
                    </a>
                    <a href="/register" class="btn btn-outline-primary px-4 py-2 rounded-lg shadow-md hover:bg-gray-200 transition duration-300">
                        Create an account
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    </div>
</body>
