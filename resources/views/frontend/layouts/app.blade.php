<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>{{ config('app.name', 'Portfolio') }} - @yield('title')</title>
         <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
         <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
         @yield('styles')
     </head>
     <body>
         @yield('content')
         <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
         <script src="{{ asset('frontend/js/script.js') }}"></script>
         @yield('scripts')
     </body>
     </html>