
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
FORMULARIO PARA REGISTRARSE 

</br><br></br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<form action="{{ url('/usuarios')}}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}

 
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
<lavel for="númerodedocumento" class="contro-label">{{'Número de Documento: '}}</label>
<input type="text"class ="form-control {{$errors->has('númerodedocumento')?'is-invalid':'' }} "   name="númerodedocumento" id="númerodedocumento" value="">
{!! $errors->first('númerodedocumento','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<div class="from-group">
<lavel for="Correoelectrónico" class="contro-label">{{'Correo Electrónico: '}}</label>
<input type="email" class ="form-control {{$errors->has('Correoelectrónico')?'is-invalid':'' }} " name="Correoelectrónico" id="Correoelectrónico" value="">
{!! $errors->first('Correoelectrónico','<div class="invalid-feedback">:message</div>') !!}
</div>
</br>
<br>
<div>
<lavel for="fechadenacimiento">{{'Fecha de nacimiento: '}}</label>
<input type="date" name="fechadenacimiento" id="fechadenacimiento" value="">
</div>
</br>
<div class="from-group">
<lavel for="dirección" class="contro-label">{{'Dirección: '}}</label>
<input type="text" class ="form-control {{$errors->has('dirección')?'is-invalid':'' }} "  name="dirección" id="dirección" value="">
{!! $errors->first('dirección','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<input type="submit" class="btn btn-success"  value="enviar">


</div>
</br>