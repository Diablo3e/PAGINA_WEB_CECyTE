<!-- Contenedor del formulario flotante -->
<div id="formulario-ventana" class="formulario-flotante">

    <div class="form-container">
        <h2>Descubre lo que significa ser parte del orgullo CECyTE Puebla</h2>
        <button onclick="cerrarFormulario()" class="cerrar-btn">✖</button>
        <form id="formularioPlanteles">
            @csrf

            <div class="form-group">
                <input type="text" name="nombre_completo" class="form-control textInput" placeholder="Nombre completo" required>
            </div>

            <div class="form-group doble">
                <input type="tel" name="celular" class="form-control textInput" placeholder="Celular" required>
                <input type="email" name="correo" class="form-control textInput" placeholder="Correo" required>
            </div>

            <div class="form-group">
                <select id="planteles" name="plantel_id" class="form-control selectMenu">
                    <option value="0">Elige tu plantel</option>
                    @foreach ($planteles as $plantel)
                    <option value="{{ $plantel->id }}">{{ $plantel->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select id="carreras" name="carrera_id" class="form-control selectMenu">
                    <option value="0">Elige tu carrera</option>
                </select>

            </div>

            <div id="btnFormularioContainer">
                <button type="submit" class="btn btn-puebla">Quiero inscribirme</button>
            </div>

        </form>
    </div>

</div>
<script>
    const BASE_URL = "{{ url('') }}";
</script>