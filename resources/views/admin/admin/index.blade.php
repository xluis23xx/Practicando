@extends("theme.$theme.layout")
@section("titulo")
    Administrador
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <h3>Bienvenido <span class="hidden-xs">{{session()->get('nombre_usuario') ?? 'Invitado'}}</span></h3>
        </div>
    </div>
@endsection