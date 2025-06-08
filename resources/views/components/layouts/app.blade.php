<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Клиника' }}</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <!-- @vite('resources/css/app.css') -->
    @livewireStyles
  </head>
  <body>
    <livewire:partials.header />
    <main id="main">
        {{ $slot }}
    </main>
    <livewire:partials.footer />
    <script src="{{ asset('resources/js/my-script.js') }}"></script>
    <!-- @vite('resources/js/app.js') -->
    @livewireScripts
  </body>
</html>
