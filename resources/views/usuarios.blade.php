<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">EMAIL</th>
      </tr>
    </thead>
    <tbody>
      <!--for each para los usuarios que vienen del controller-->
      @foreach ($usuarios as $usuario)
      <tr>
        <th scope="row">{{$usuario['id']}}</th>
        <td>{{$usuario['nombre']}}</td>
        <td>{{$usuario['email']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</html>
