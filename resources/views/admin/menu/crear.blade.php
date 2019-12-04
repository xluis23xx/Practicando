@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús
@endsection
@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="container-fluid" style="padding-top:15px">
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear menús</h3>
                </div>
                <form action="{{route('guardar_menu')}}" method="POST" id="form-general" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="card-footer">
                        @include('includes.boton-form-crear')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection