<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   @livewireStyles

   <title>
      @hasSection('title')
         @yield('title') |
      @endif {{ env('APP_NAME') }}
   </title>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <style>
      @stack('css')
   </style>

</head>

<body class="font-sans antialiased">
   <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      <livewire:layout.navigation />

      <!-- Page Heading -->
      @if (isset($header))
         <header class="bg-dark dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
               {{ $header }}
            </div>
         </header>
      @endif

      <!-- Page Content -->
      <main>
         {{ $slot }}
      </main>
   </div>
   @livewireScripts
   <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
