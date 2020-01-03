@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Permisos</h3>
                    <a href="{{route('permiso')}}" class="btn btn-info btn-sm pull-right">Listado</a>
                </div>
                    <form action="{{route('guardar_permiso')}}" method="POST" id="form-general" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            @include('admin.permiso.form')
                        </div>
                        <div class="box-footer">
                            @include('includes.boton-form-crear')
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection