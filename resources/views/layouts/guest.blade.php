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

    <!-- Custom Styles -->
    <style>
        /* General Styling */
        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(120deg, #f0f4f8, #007bff);
            color: #333;
        }

        /* Flexbox for Centering */
        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        }

        /* Card Styling */
        .card {
            width: 100%;
            max-width: 500px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out, transform 0.3s;
        }

        .card:hover {
            box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        /* Logo Styling */
        .logo {
            display: block;
            margin: 0 auto 20px;
        }

        /* Button Styling */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="flex-center">
        <div>
            <a href="/" class="logo">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="card">
            {{ $slot }}

            <!-- Example button -->
            <button class="btn btn-primary mt-4">Submit</button>
        </div>
    </div>
</body>

</html>
