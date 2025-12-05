<div class="container_accesibilidad">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <button id="mas" class="limitImage"><img src="{{ asset('imagenes/Accesibilidad/zoom in.png') }}"></button>
        <button id="menos" class="limitImage"><img src="{{ asset('imagenes/Accesibilidad/zoom out.png') }}"></button>
        <button id="normal" class="limitImage" onclick="escalaNormal()"><img src="{{ asset('imagenes/Accesibilidad/colorScale.png') }}"></button>
        <button id="oscuro" class="limitImage" onclick="escalaNegativa()"><img src="{{ asset('imagenes/Accesibilidad/negativeScale.png') }}"></button>
        <button id="gris" class="limitImage" onclick="escalaGrises()"><img src="{{ asset('imagenes/Accesibilidad/grayScale.png') }}"></button>
        <button id="audio-toggle" class="limitImage" title="Activar/Desactivar audio accesibilidad"><img src="{{ asset('imagenes/Accesibilidad/sound.png') }}"></button>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="limitImage"><img src="{{ asset('imagenes/Accesibilidad/mainMenu.png') }}" alt=""></label>
    </div>
</div>