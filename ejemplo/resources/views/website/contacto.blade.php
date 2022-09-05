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
     <h2>Coctacta conmigo</h2>
     @if (Session::has('error'))
        <p style="color:red">{{ Session::get('error') }}</p>
     @endif
     @if (Session::has('success'))
     <p style="color:green">{{ Session::get('success') }}</p>
    @endif
     <form action="{{route('website.sed-contacto')}}" method="POST">
         @csrf
         <p>
            <input type="text" name="name" id="" placeholder="Nombre">
         </p>
         <p>
            <input type="text" name="email" placeholder="Email" >
         </p>
         <p>
            <textarea name="message" placeholder="message"></textarea>
         </p>
         <button>Personalizar</button>
         
     </form>
</body>
</html>