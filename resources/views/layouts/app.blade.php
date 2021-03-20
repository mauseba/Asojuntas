<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        
        

    </head>
    <body class="font-sans antialiased">

        
        @livewire('navigation')
        @include('Slider.slider')

        <div class="min-h-screen bg-gray-100">
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
               
        </div>

        @stack('modals')

        @livewireScripts
      
    </body>
    <footer>
        @livewire('footer')
    </footer>
</html>
