<div class="container_accesibilidad">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <button id="mas"><img src="{{ asset('imagenes/Accesibilidad/zoom_in.png') }}"></button>
        <button id="menos"><img src="{{ asset('imagenes/Accesibilidad/zoom_out.png') }}"></button>
        <button id="normal" onclick="escalaNormal()"><img src="{{ asset('imagenes/Accesibilidad/colors.png') }}"></button>
        <button id="oscuro" onclick="escalaNegativa()"><img src="{{ asset('imagenes/Accesibilidad/negative.png') }}"></button>
        <button id="gris" onclick="escalaGrises()"><img src="{{ asset('imagenes/Accesibilidad/gray.png') }}"></button>
        <button id="audio-toggle" title="Activar/Desactivar audio accesibilidad" style="margin-left:10px;">🔊 </button>
    </div>
    <div class="btn-mas">
        <label for="btn-mas"><img src="{{ asset('imagenes/Accesibilidad/logo_accesibilidad.png') }}" alt=""></label>
    </div>
</div>