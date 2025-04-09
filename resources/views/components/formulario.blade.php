<!-- Contenedor del formulario flotante -->
<div id="formulario-ventana" class="formulario-flotante">
    <div class="form-container">
        <h2>¿Quieres mas Información?</h2>
        <button onclick="cerrarFormulario()" class="cerrar-btn">✖</button>
        <form id="formulario" action="{{ route('formulario.enviar') }}" method="POST">
            @csrf
            <div class="form-group">
                <select id="modalidad" name="modalidad" class="form-control">
                    <option value="">- Modalidad -</option>
                    @foreach ($modalidades as $modalidad)
                        <option value="{{ $modalidad->id }}">{{ $modalidad->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select id="nivel" name="nivel" class="form-control">
                    <option value="">- Nivel -</option>
                    @foreach ($niveles as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select id="plantel" name="plantel" class="form-control">
                    <option value="">- Plantel -</option>
                    @foreach ($planteles as $plantel)
                        <option value="{{ $plantel->id }}">{{ $plantel->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select id="carrera" name="carrera" class="form-control">
                    <option value="">- Carreras -</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="text" name="nombre_completo" class="form-control" placeholder="Nombre Completo" required>
            </div>

            <div class="form-group">
                <input type="tel" name="celular" class="form-control" placeholder="Celular" required>
            </div>

            <div class="form-group">
                <input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" required>
            </div>

            <button type="submit" class="btn btn-puebla">Enviar</button>
        </form>
    </div>
</div>
