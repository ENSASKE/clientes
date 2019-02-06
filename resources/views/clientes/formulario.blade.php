
@include('header')

<div class="row">
    <div class="col-4 offset-3">
        <h1>Registro de Cliente</h1>

        <form action ="{{ action('ClientesController@guardar') }}" method="POST">
            
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{!! !empty($cliente) ? $cliente->nombre : '' !!}">
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{!! !empty($cliente) ? $cliente->apellido : '' !!}">
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="{!! !empty($cliente) ? $cliente->correo : '' !!}">
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento" readonly value="{!! !empty($cliente) ? date('d-m-Y', strtotime($cliente->fecha_nacimiento)) : '' !!}">
            </div>

            <input type="hidden" name="cliente_id" value="{!! !empty($cliente) ? $cliente->cliente_id : '' !!}">

            <input type="submit" class="btn btn-primary" value="Guardar">

            @if ($errors->any())
                <br><br>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</div>

@include('footer')

<script>
    $('#fecha_nacimiento').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd-mm-yyyy'
    });
</script>