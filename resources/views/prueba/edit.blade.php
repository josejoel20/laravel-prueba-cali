@extends('plantilla.plantilla')
@section('titulo','Editar registro')

@section('contenido')
<div class="container">
     <br>
@include('prueba.navuser')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="{{route('prueba.index')}}">Home</a></li>
  </ol>
</nav>
</div>

<form method="post" action="{{route('prueba.update', $prueba->id)}}">
	@method('PUT')
@csrf
<div class="container register">


                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Editar Registro</h3>
                                                            
                                <div class="row register-form">

                                    <div class="col-md-6">                                        

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                            <input type="text" class="form-control" id="nom_ape" name="nom_ape" placeholder="Nombres y Apellidos" required="" value="{{$prueba->nom_ape}}">
                                            </div>
                                        </div>

                                        @php ($tipo_ducumento=['DNI','Carné de extranjería'])
                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                                </div>
                                             <select class="form-control" id="tipo_documento" name="tipo_documento">
                                                <option class="hidden" selected disabled>Tipo de documento</option>
                                                @foreach($tipo_ducumento as $tp)
                                                <option
                                                		@if ($prueba->tipo_documento==$tp)
                                                			selected
                                                		@endif
                                                	>{{$tp}}</option>
                                                @endforeach
                                            </select>

                                            </div>
                                        </div>

                                        

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="text" name="n_documento" placeholder="Numero de documento" id="n_documento" value="{{$prueba->n_documento}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                                </div>
                                             <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Email" value="{{$prueba->correo_electronico}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        

                                         <div class="form-group">
                                            <label >Fecha de nacimiento</label>
                                           <div class="input-group">
                                                <div class="input-group-prepend">                                                    
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                                </div>
                                                
                                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" min="1000-01-01"
                                                  max="3000-12-31" class="form-control" value="{{$prueba->fecha_nacimiento}}">                                                   
                                            </div>
                                        </div>

                                        @php ($direcciones=['Trujillo','Lima'])

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                                </div>
                                             <select class="form-control" name="direccion" id="direccion">
                                                <option class="hidden" selected disabled>Direccion</option>
                                                @foreach($direcciones as $dir)
                                                	<option
                                                		@if ($prueba->direccion==$dir)
                                                			selected
                                                		@endif
                                                	>{{$dir}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>

                                    <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                    <a href="{{route('cancelar')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>

            </div>

</form>
@include('plantilla.footer',['container'=>'container'])
@endsection