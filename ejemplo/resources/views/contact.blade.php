<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME' ) }} | Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body >
   <h1>Mi primera Coctacto</h1>
   <a href="/contacto">Contacto</a>
        <form action="{{route('process.contact')}}" method="POST" autocomplete="off">
            @csrf
            <div>
                <label for="">Nombre</label>
                <input type="text" name="name" placeholder="Name" value="{{old('name')}}"/>
            </div>
            <div>
                <label>Correo Electronico</label>
                <input type="email" name="email" placeholder="email" value="{{old('email')}}"/>
            </div>
            <div>
                <label for="">Telefono</label>
                <input type="number" name="phone" placeholder="telefono" value="{{old('telefono')}}"/>
            </div>
            <div>
                <label for="">Consulta</label>
                <textarea name="message" id="" cols="30" rows="2" value="{{old('message')}}">></textarea>
            </div>
            <div>
                <button>Enviar</button>
            </div>
        
        </form>
</body>
</html>