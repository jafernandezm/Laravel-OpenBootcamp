<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME' ) }}</title>
    <meta charset="utf-8">
</head>
<body >
    <header>
        <nav>
            <a  @if ($section =='who-we-are') style="color: green;"@endif href="{{ route('website.section',['section' =>'who-we-are']) }}">  Quien Soy? </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a @if($section =='contacto')style="color: green;" @endif href="{{ route('website.section',['section' =>'contacto']) }}"> Contacto </a>
        </nav>
    </header>

    <h1>hola, mi nombre es {{$name}} </h1>
    <h3>Tengo {{$age}} años</h3>
    <h4>Trabajo de {{$profesion}}</h4>
    @if ($user =="Usuario")
    <h2>Rellena tu nombre para personalizar la pagina</h2>
    @else
    <h2>Si no te llamas {{$user}} rellena el formulario</h2>
    @endif
     <h2>Rellena tu nombre para personalizar la pagina</h2>
     <form action="{{route('website.personalize')}}" method="POST">
         @csrf
         <input type="text" name="name" id="" placeholder="Nombre" value="{{$user}}">
         <button>Personalizar</button>
     </form>
</body>
</html>