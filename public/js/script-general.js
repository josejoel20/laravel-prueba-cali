    $(document).ready(function() {
  $("#fecha_nacimiento").datepicker({
    changeMonth:true,
    changeYear: true
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