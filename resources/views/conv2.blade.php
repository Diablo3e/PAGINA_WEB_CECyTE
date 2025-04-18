@extends('layouts.app')
@section('title', 'Convenios CECYTE')

@section('content')
    <div class="convenios-container1">
        <h1>Convenios de CECYTE</h1>
        <div class="grid-container" id="tarjetas-container">
            <!-- Las tarjetas se insertarán dinámicamente aquí -->
        </div>
    </div>
@endsection
        <h1> Convenios de CECYTE</h1>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sectores = [
                {
                    nombre: "Empresas",
                    color: "#B0163A",
                    enlace: "https://cecytepuebla.edu.mx/Vinculacion/convenios2024/CONVENIOS2024.pdf"
                },
                {
                    nombre: "Universidades Privadas",
                    color: "#A2C617",
                    enlace: "https://www.ejemplo2.com"
                },
                {
                    nombre: "Universidades Públicas",
                    color: "#F58220",
                    enlace: "https://www.ejemplo3.com"
                },
                {
                    nombre: "Hoteles y Restaurantes",
                    color: "#058C42",
                    enlace: "https://www.ejemplo4.com"
                },
                {
                    nombre: "Descuentos para colaboradores",
                    color: "#750D37",
                    enlace: "https://www.ejemplo5.com"
                },
                {
                    nombre: "Asociaciones Civiles",
                    color: "#C61754",
                    enlace: "https://www.ejemplo6.com"
                },
                {
                    nombre: "Estancias Infantiles",
                    color: "#7CB518",
                    enlace: "https://www.ejemplo7.com"
                },
                {
                    nombre: "Sector Gubernamental",
                    color: "#F58220",
                    enlace: "https://www.ejemplo8.com"
                },
                {
                    nombre: "Otro",
                    color: "#5A0B2C",
                    enlace: "https://www.ejemplo10.com"
                }
            ];

            const contenedor = document.getElementById('tarjetas-container');

            sectores.forEach(sector => {
                const tarjeta = document.createElement('div');
                tarjeta.classList.add('card');
                tarjeta.style.borderTop = `6px solid ${sector.color}`;
                tarjeta.style.cursor = 'pointer';
                
                tarjeta.onclick = () => {
                    window.open(sector.enlace, '_blank');
                };

                const titulo = document.createElement('h3');
                titulo.textContent = sector.nombre;

                const descripcion = document.createElement('p');
                descripcion.textContent = "Haz clic para más información.";

                tarjeta.appendChild(titulo);
                tarjeta.appendChild(descripcion);
                contenedor.appendChild(tarjeta);
            });
        });
    </script>
@endpush
