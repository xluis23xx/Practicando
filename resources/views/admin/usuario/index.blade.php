@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
           @include('includes.mensaje')
           <div class="box">
               <div class="box-header with-border">
                   <h3 class="box-tittle" id="rol">Usuarios</h3>
                   <div class="box-tools pull-right nuevo">
                        <a href="{{route('crear_usuario')}}" class="btn btn-block btn-success btn-sm">
                            <i class="fa fa-fw fa-plus-circle"></i> Nuevo Registro
                        </a>
                   </div>
               </div>
               <div class="box-body">
                   <table class="table table-striped table-bordered table-hover" id="tabla-data">
                       <thead>
                           <tr>
                               <th>Nombre</th>
                               <th>Usuario</th>
                               <th>Email</th>
                               <th class="width70">Acciones</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->usuario}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <a href="{{route('editar_usuario',['id' => $data->id ])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-fw fa-pencil"></i>
                                    </a>
                                    <form action="{{route('eliminar_usuario', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                            <i class="fa fa-fw fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
        </div>
    </div>
@endsection
