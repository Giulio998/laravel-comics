<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')
</body>
</html>

<style>
  main{
    height: calc(100vh - 140px);
    width: 100%;
  }
</style>