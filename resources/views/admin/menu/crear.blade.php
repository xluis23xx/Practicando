@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear menús</h3>
                    <a href="{{route('menu')}}" class="btn btn-info btn-sn pull-right">Listado</a>
                </div>
                <form action="{{route('guardar_menu')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="box-footer">
                        @include('includes.boton-form-crear')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection