@php
    $myName="Jhon";   
    $lecciones=["introduccion","directorios","<b>todos<b>"];
@endphp

<!DOCTYPE html>
<html>
<head>

    <title>{{ env('APP_NAME' ) }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <style>
        body{
            background:green;
        }
    </style>
</head>
<body >
    <h1>Mi primera pagina</h1>
    <p>Esta es mi primera pagina hecha con laravel</p>
  
    <p>Mi nombre es  {{ $myName}} y estoy encantado de este curso</p>
    <h4>Que hemos visto</h4>
    <ul>
      @foreach ($lecciones as $l)
          <li>{!! $l !!} </li>
      @endforeach
    </ul>

    <script src="{{ asset('js/script.js')}}"> </script>
</body>
</html>