<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
  <title>Document</title>
</head>
<body>
  <nav>
    <ul>
      <div class="row">
        <li class="p-3"><a href="{{ route('comics.index') }}">Lista comics</a></li>
        <li class="p-3"><a href="{{ route('comics.create') }}">Aggiungi comic</a></li>
      </div>
    </ul>
  </nav>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>