
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
  @endif 
<div class="container">
<br>
<h1> FORMULARIO PARA REGISTRARSE </h1>

<script >
  function validar(númerodedocumento)
{
    var númerodedocumento;
    númerodedocumento = document.getElementById("númerodedocumento").value;

    if(númerodedocumento === "" || Nombres === "" || tipodedocumento === "" || Correoelectrónico === "" || fechadenacimiento === ""|| dirección === ""){
     
        alert("todos los campos deben ser llenados");
        return false;
    }


    
}
</script>

</br><br></br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<form action="{{ url('/usuarios')}}" method="post" onsubmit="return validar(númerodedocumento);"  enctype="multipart/form-data">

{{ csrf_field() }}

<title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> 

<div class="from-group" >
<lavel for="Nombres"class="contro-label">{{'Nombres y Apellidos: '}}</label>
<input type="text" class ="form-control {{$errors->has('Nombres')?'is-invalid':'' }} " name="Nombres" id="Nombres" value="">

{!! $errors->first('Nombres','<div class="invalid-feedback">:message</div>') !!}

</div>

<br>
<div>
<lavel for="tipodedocumento">{{'Tipo de Documento: '}}</label>
<input type="radio"  name="tipodedocumento" id="tipodedocumento" value="DNI">
<lavel for="tipodedocumento">{{'DNI'}}</label>
<input type="radio"  name="tipodedocumento" id="tipodedocumento" value="CARNÉ DE EXTRANJERÍA">
<lavel for="tipodedocumento">{{'CARNÉ DE EXTRANJERÍA'}}</label>
</div>



</br>
<div class="from-group">
<lavel for="númerodedocumento"  class="contro-label">{{'Número de Documento: '}} </label>
<input type="text"class ="form-control {{$errors->has('númerodedocumento')?'is-invalid':'' }} " name="númerodedocumento" id="númerodedocumento" id = 'error' value="">

{!! $errors->first('númerodedocumento','<div class="invalid-feedback">:message</div>') !!}
</div>


<br>

<div class="from-group">
<lavel for="Correoelectrónico" class="contro-label">{{'Correo Electrónico: '}} </label>
<input type="email" class ="form-control {{$errors->has('Correoelectrónico')?'is-invalid':'' }} " name="Correoelectrónico" id="Correoelectrónico" value="">
{!! $errors->first('Correoelectrónico','<div class="invalid-feedback">:message</div>') !!}
</div>
</br>
<br>
<div>
<lavel for="fechadenacimiento">{{'Fecha de nacimiento: '}}</label>
<input type="text" name="fechadenacimiento" id="datepicker" value="">
</div>
</br>
<div class="from-group">
<lavel for="dirección" class="contro-label">{{'Dirección: '}}</label>
<input type="text" class ="form-control {{$errors->has('dirección')?'is-invalid':'' }} "  name="dirección" id="dirección" value="">
{!! $errors->first('dirección','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<input type="submit"  class="btn btn-success"   value="ENVIAR">
<input type="reset"  class="btn btn-success"  value="LIMPIAR DATOS">

</div>
</br>
</form>
