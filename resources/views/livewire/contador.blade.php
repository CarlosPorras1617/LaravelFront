<div>
    <!-- vincular y mandar en tiempo real el nombre desde el formulario al controller -->
    <input wire:model='nombre' class="form-control" type="text">
    <h1>Hola {{$nombre}} el numero actual numero actual {{$numero}}</h1>
    <!-- mandar a llamar metodos desde un boton -->
    <button wire:click="incrementar" class="btn btn-success">+</button>
    <button wire:click='decrementar' class="btn btn-danger">-</button>
    <!-- sentencia if -->
    <button wire:click='cambio' class="btn btn-info">{{$activo==true ? 'Activado' : 'Desactivado'}}</button>

    <button  class="btn {{$activo==true ? 'btn-success' : 'btn-danger'}}">Cambio</button>
</div>
