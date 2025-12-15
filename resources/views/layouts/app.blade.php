<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Programando Ando</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            /* Forzar tema claro siempre */
            html, body {
                background-color: #f8f9fa !important;
            }
            
            /* Header siempre blanco */
            header {
                background-color: white !important;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1) !important;
            }
            
            header h2 {
                color: #1f2937 !important;
            }
            
            /* Main content fondo claro */
            main {
                background-color: #f8f9fa !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased" style="background-color: #f8f9fa !important;">
        <div class="min-h-screen" style="background-color: #f8f9fa !important;">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header style="background-color: white !important; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main style="background-color: #f8f9fa !important;">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>