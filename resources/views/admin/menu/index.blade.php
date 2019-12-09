@extends("theme.$theme.layout")
@section('titulo')
    Menú
@endsection
@section("styles")
    <link rel="stylesheet" type="text/css" href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}">
@endsection
@section("scriptsPlugins")
    <script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="container-fluid" style="padding-top:15px">
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="card">
                <div class="box box-success ml-4 mt-3 mb-3">
                    <div class="box-header with-border">
                        <h3 class="box-tittle">Menús</h3>
                        <a href="{{route('crear_menu')}}" class="btn btn-success btn-sm pull-right">Crear menú</a>
                    </div>
                    <div class="box-body">
                        @csrf
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                @foreach ($menus as $key=>$item)
                                    @if ($item["menu_id"]!=0)
                                        @break
                                    @endif
                                    @include("admin.menu.menu-item",["item"=>$item])
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection