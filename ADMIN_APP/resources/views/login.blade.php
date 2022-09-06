<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
   
    @if ( Session()->has('error'))
    <p style="color: red"> {{ Session()->get('error') }} </p> 
    @endif
    <form action="{{ route('login')}}" method="POST">
        @csrf
        <div>
            <label for="">Usuario</label>
            <p>
                <input type="text" name="user" placeholder="Usuario">
            </p>
         
        </div>
        <div>
            <label for="">Password</label>
            <p>
                <input type="password" name="password" placeholder="password">
            </p>
        </div>
        <button>Enviar</button>
    
    </form>
</body>
</html>