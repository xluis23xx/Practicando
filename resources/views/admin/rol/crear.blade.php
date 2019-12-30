@extends("theme.$theme.layout")
@section('titulo')
    Roles
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Rol</h3>
                    <div class="box-tools pull-right">
                        <a href="{{route('rol')}}" class="btn btn-block btn-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i> Volver al Listado
                        </a>
                   </div>
                </div>
                <form action="{{route('guardar_rol')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.rol.form')
                    </div>
                    <div class="box-footer">
                        @include('includes.boton-form-crear')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection