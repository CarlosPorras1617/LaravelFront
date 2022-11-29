<div>
    {{-- Do your work, then step back. --}}
    <!-- esta es la vista, que se renderiza desde el controller que es http/livewire/Usuarios.php -->
    <!-- y el view/layouts/app.blade.php es el slot donde estaran rotando las interfaces -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th style="width: 40px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- for each para los usuarios -->
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario['id']}}</td>
                    <td>{{$usuario['nombre']}}</td>
                    <td>{{$usuario['email']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
