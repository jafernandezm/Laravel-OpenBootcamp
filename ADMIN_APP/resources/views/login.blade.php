
@extends('panel.generals.baselogin')

@section('main')
<div class="container py-5">
    @if ( Session()->has('error'))
    <div class="alert alert-danger">
     {{ Session()->get('error') }}
    </div>
    @endif
    <div class="row justify-content-center ">
        <div class="col-12 col-md-4">
            <form action="{{ route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Correo electronico</label>
                    <p>
                        <input class="fomr-control" type="text" name="email" placeholder="Correo electronico">
                    </p>
                
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <p>
                        <input class="fomr-control"  type="password" name="password" placeholder="password">
                    </p>
                </div>
                <button class="btn btn-info">Acceder</button>
            
            </form>
        </div>
    </div>
</div>
@endsection