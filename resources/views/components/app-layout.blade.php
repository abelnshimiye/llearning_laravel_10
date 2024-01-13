<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

  <div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold underline">
     {{ config('app.name')}}
    </h1>

    {{-- @yield('content') --}}

    {{$slot}}


  </div>

</body>
</html>