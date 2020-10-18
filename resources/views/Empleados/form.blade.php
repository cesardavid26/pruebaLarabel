
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre" 

value="{{isset($empleado->Nombre)?$empleado->Nombre: ''}}">
</div>

<div class="form-group">
<label for="ApellidoPaterno"class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" name="ApellidoPaterno" class="form-control" id="ApellidoPaterno" 

value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno: ''}}">
</div>

<div class="form-group">
<label for="ApellidoMaterno"class="control-label">{{'Apellido Materno'}}</label>
<input type="text" name="ApellidoMaterno" class="form-control"  id="ApellidoMaterno" 
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno: ''}}">
</div>

<div class="form-group">
<label for="Correo"class="control-label">{{'Correo'}}</label>
<input type="email" name="Correo" class="form-control"id="Correo" 
value="{{isset($empleado->Correo)?$empleado->Correo: ''}}">
</div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($empleado->Foto))

<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="150">
@endif
<input type="file" name="Foto" class="form-control" id="Foto" 
value="{{isset($empleado->Foto)?$empleado->Foto: ''}}">
</div>

<input class="btn btn-success" type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}
">
<a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>
