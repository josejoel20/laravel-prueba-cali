@extends('plantilla.plantilla')
@section('titulo','Crear nuevo registro')

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



<form method="post" id="formulario" action="{{route('prueba.store')}}" onsubmit="return validarFormulario()">
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
                                
                                <h3 class="register-heading">Crear nuevo Registro</h3>
                                                            
                                <div class="row register-form">

                                    <div class="col-md-6">                                        

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                            <input type="text" class="form-control" id="nom_ape" name="nom_ape" placeholder="Nombres y Apellidos">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                                </div>
                                             <select class="form-control" id="tipo_documento" name="tipo_documento">
                                                <option class="hidden" selected disabled>Tipo de documento</option>
                                                <option>DNI</option>
                                                <option>Carné de extranjería</option>
                                            </select>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="text" name="n_documento" placeholder="Numero de documento" id="n_documento">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                                </div>
                                             <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Email" value="" />
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
                                                
                                                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento"  class="form-control">                                                   
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                                </div>
                                             <select class="form-control" name="direccion" id="direccion">
                                                <option class="hidden" selected disabled>Direccion</option>
                                                <option>Trujillo</option>
                                                <option>Lima</option>
                                            </select>
                                            </div>
                                        </div>

                                    <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                    <input type="button" class="redondo btn btn-danger" onclick="limpiarFormulario()" value="Limpiar formulario">
                                    <a href="{{route('cancelar')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>

            </div>

</form>

<script type="text/javascript">


    $(document).ready(function() {
  $("#fecha_nacimiento").datepicker({
    changeMonth:true,
    changeYear: true,
    dateFormat: "yy/mm/dd"
  });
  
});
function validarFormulario(){
 
    var txtNombre = document.getElementById('nom_ape').value;
    var cmbSelector = document.getElementById('tipo_documento').selectedIndex;
    var txtn_documento = document.getElementById('n_documento').value;
    var txtCorreo = document.getElementById('correo_electronico').value;
    var txtFecha = document.getElementById('fecha_nacimiento').value;
    var cmbSelector2 = document.getElementById('direccion').selectedIndex;
 
    var banderaRBTN = false;
 
    //Test campo obligatorio
    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
      alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }

    //Test comboBox
    if(cmbSelector == null || cmbSelector == 0){
      alert('ERROR: Debe seleccionar una opcion del tipo de documento');
      return false;
    }
 
    //Test edad
    if(txtn_documento == null || txtn_documento.length == 0 || isNaN(txtn_documento)){
      alert('ERROR: Debe ingresar su numero de documento');
      return false;
    }
 
    //Test correo
    if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
      alert('ERROR: Debe escribir un correo válido');
      return false;
    }
 
    //Test fecha
    if(!isNaN(txtFecha)){
      alert('ERROR: Debe elegir una fecha');
      return false;
    }
 
    //Test comboBox
    if(cmbSelector2 == null || cmbSelector2 == 0){
      alert('ERROR: Debe seleccionar una opcion del tipo de documento');
      return false;
    }
 
 
    return true;
  }

function limpiarFormulario() {
    document.getElementById("formulario").reset();
  }
</script>
@include('plantilla.footer',['container'=>'container'])
@endsection