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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->
        
                                             
        <link rel="stylesheet" href="/css/color.css">
        <link rel="stylesheet" href="/css/main.css">
        
        @stack('styles') <!-- CSSファイルをここで読み込み -->
        
    </head>
    <body class="">
        <div class="">
            @include('components.global-header')
            
            

            <!-- Page Heading -->
            @if (isset($header))
                <header class="">
                    <div class="">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="">
                {{ $slot }}
            </main>
            @include('components.footer')
        </div>
        
        
    </body>
</html>