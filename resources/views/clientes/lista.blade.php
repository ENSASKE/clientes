
@include('header')

<div class="row">
    <div class="col-6 offset-2">
        <h1>Listado de Clientes</h1>
        <a class="btn btn-sm btn-primary" href="{{ route('formulario') }}">Nuevo Cliente</a>
        <br><br>

        
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        

        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
                <td>Fecha Nacimiento</td>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
               <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->apellido }}</td>
                    <td>{{ $cliente->correo }}</td>
                    <td>{{ date('d-m-Y', strtotime($cliente->fecha_nacimiento)) }}</td>
                    <td><a class="btn btn-sm btn-secondary" href="{{ route('formulario', ['cliente_id' => $cliente->cliente_id]) }}">Editar</a></td>
                    <td><a class="btn btn-sm btn-danger" href="{{ route('eliminar', ['cliente_id' => $cliente->cliente_id]) }}">Eliminar</a></td>
               </tr> 
            @endforeach
        </tbody>
        </table>

    </div>
</div>

@include('footer')