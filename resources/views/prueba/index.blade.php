@extends('plantilla.plantilla')

@section('titulo','Crud Laravel')

@section('contenido')
<div class="container-fluid registerinicio">
                <div class="row">
                    <div class="col-md-6 register-left register-left1">
                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                    </div>    
                    <div class="col-md-6 register-left">
                        
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>    
                </div>
</div>



<div class="container-fluid ">

@if (session('datos'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('datos')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('cancelar'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('cancelar')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

 <br>
@include('prueba.navuser')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="{{route('prueba.index')}}">Home</a></li>
  </ol>
</nav>

   <br>
      <h1 class="text-center">Datos personales</h1>

      <br>
<div class="row float-right">
    <a href="{{ route('prueba.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
</div>
   <br>
<table class="table-responsive table text-center">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Nombres y apellidos</th>
                                                  <th scope="col">Tipo documento</th>
                                                  <th scope="col">N° documento</th>
                                                  <th scope="col">Correo electronico</th>
                                                  <th scope="col">Fecha Nacimiento</th>
                                                  <th scope="col">Dirección</th>
                                              
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($prueba as $pruebaitem)
                                                  <tr>
                                                    <th scope="row">{{$pruebaitem->id}}</th>
                                                    <td>{{$pruebaitem->nom_ape}}</td>
                                                    <td>{{$pruebaitem->tipo_documento }}</td>
                                                    <td>{{$pruebaitem->n_documento}}</td>
                                                    <td>{{$pruebaitem->correo_electronico}}</td>
                                                    <td>{{$pruebaitem->fecha_nacimiento}}</td>
                                                    <td>{{$pruebaitem->direccion}}</td>
                                                    <td><a href="{{route('prueba.edit',$pruebaitem->id)}}" class="btn btn-success btncolorblanco">
                                                          <i class="fa fa-edit"></i> Editar 
                                                        </a>

                                                        <a href="{{route('prueba.confirm',$pruebaitem->id)}}" class="btn btn-danger btncolorblanco">
                                                          <i class="fa fa-trash-alt"></i> Eliminar 
                                                        </a>
                                                    </td>
                                                    
                                                  </tr>

                                                @endforeach
                                               
                                                </tr>

                                              </tbody>
                                            </table>

{{$prueba ->links()}}
</div>

@include('plantilla.footer',['container'=>'container-fluid'])
@endsection