<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        /* General Styling */
        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #007bff);
            color: #333;
        }

        /* Header Styling */
        header {
            background-color: #007bff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        header .container {
            max-width: 1100px;
            margin: 0 auto;
            color: #fff;
        }

        /* Navigation Styling */
        nav {
            background-color: #0056b3;
            padding: 10px 0;
            color: #fff;
        }

        nav a {
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffc107;
        }

        /* Main Content Styling */
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Buttons Styling (Edit & Delete buttons) */
        .btn-edit {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #0056b3;
            color: white;
            margin-top: 30px;
        }


    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        <!-- Navigation Bar -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-primary shadow">
            <div class="container py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Optional Footer -->
        <footer>
            © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </footer>
    </div>
</body>

</html>
