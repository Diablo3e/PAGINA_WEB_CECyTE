@extends('layouts.app')

@section('title', 'Bolsa de trabajo cecyte')

@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_bolsa.css') }}">
@endpush

<div class="bg-white">
    
    <section class="seccion-con-fondo-blanco">
        <section class="seccion-hero text-center text-white" style="background-image: url('/imagenes/bolsa1.jpg'); min-height: 500px; background-size: cover; background-position: center;"

        >
        </section>
    </section>
    
    <section class="bolsa-trabajo py-5 text-center">
        <div class="container">
            <h2>Bolsa de trabajo</h2>
            <p>La Dirección de Vinculación es la responsable de generar convenios de colaboración y se encarga de realizar los trámites correspondientes para implementar acciones de cooperación, mediante la celebración de convenios entre el CECYTE Puebla y las diferentes Instituciones.</p>
        </div>
    </section>

    {{-- Sección nueva con 2 imágenes y botones --}}
    <section class="seccion-imagenes py-5">
        <div class="container">
            <div class="img-container">
                <div class="img-box">
                    <img src="{{ asset('imagenes/imagen 1.jpg') }}">
                    <a href="https://cecytepuebla.edu.mx/Vinculacion/Bolsa/Información_E&E_Propedeutico_centros.pdf" target="_blank">
                        <button>Haz click aqui</button>
                    </a>
                </div>
                <div class="img-box">
                    <img src="{{ asset('imagenes/imagen2.jpg') }}">
                    <a href="https://cecytepuebla.edu.mx/Vinculacion/Bolsa/TELGLO.pdf" target="_blank">
                        <button>Haz click aqui</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="galeria-imagenes py-5">
        <div class="container">
            <h2 class="text-center mb-4">Ofertas de Trabajo</h2>
            <div class="row">
                @foreach (range(1, 9) as $i)
                    <div class="col-md-4 mb-4">
                        <div class="imagen-hover">
                            <img src="{{ asset("imagenes/$i.jpg") }}" alt="Oferta {{ $i }}" class="clickable-image">

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

{{-- Modal de imagen grande --}}
<div id="imageModal" class="custom-modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImg">
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImg');
        const close = document.querySelector('.custom-modal .close');

        document.querySelectorAll('.clickable-image').forEach(img => {
            img.addEventListener('click', function () {
                modal.style.display = 'block';
                modalImg.src = this.src;
            });
        });

        close.onclick = function () {
            modal.style.display = 'none';
        }

        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    });
</script>
@endpush

@endsection
