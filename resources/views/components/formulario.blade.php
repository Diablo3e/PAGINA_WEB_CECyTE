
<!-- Contenedor del formulario flotante -->
<div id="formulario-ventana" class="formulario-flotante">
    
    <div class="form-container">
        <h2>Descubre lo que significa ser parte del orgullo CECyTE Puebla</h2>
        <button onclick="cerrarFormulario()" class="cerrar-btn">✖</button>
        <form id="formulario" action="{{ route('formulario.enviar') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="nombre_completo" class="form-control" placeholder="Nombre completo" required>
            </div>

            <div class="form-group doble">
                <input type="tel" name="celular" class="form-control" placeholder="Celular" required>
                <input type="email" name="correo" class="form-control" placeholder="Correo" required>
            </div>

            <div class="form-group">
                <select id="plantel" name="plantel_id" class="form-control">
                    <option value="">Elige tu plantel</option>
                    @foreach ($planteles as $plantel)
                        <option value="{{ $plantel->id }}">{{ $plantel->plantel_nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
<select id="carreras" name="carrera_id" class="form-control">
    <option value="">Elige tu carrera</option>
</select>

            </div>

            <button type="submit" class="btn btn-puebla">Quiero inscribirme</button>
        </form>
    </div>
</div>
