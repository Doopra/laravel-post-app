<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posty</title>

        <!-- Fonts -->
        @vite('resources/css/app.css')
    
    
</head>
<body class="bg-red-600">
<h1 class="text-3xl text font-bold underline text-gray-600">
    Hello world!
  </h1>
  
  <p class="underline underline-offset-1 ...">The quick brown fox...</p>
<p class="underline underline-offset-2 ...">The quick brown fox...</p>
<p class="underline underline-offset-4 ...">The quick brown fox...</p>
<p class="underline underline-offset-8 ...">The quick brown fox...</p>
 
    @yield('content')

    
</body>
</html>