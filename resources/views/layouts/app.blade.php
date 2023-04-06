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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/flowbite.min.css') }}" rel="stylesheet" />
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))

        @endif

        <!-- Page Content -->
        <main class="p-3 pt-20">
            {{ $slot }}
        </main>

    </div>

    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/flowbite.min.js') }}" ></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
