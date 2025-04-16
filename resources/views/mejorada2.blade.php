<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Línea del Tiempo CECyTE Puebla</title>

  <style>
    /* --------------------- ESTILOS GENERALES --------------------- */
    body {
      background-color: #0a0a0a;
      color: white;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Contenedor principal de la línea del tiempo */
    .timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 0;
    }

    /* Línea central azul que cruza la línea del tiempo */
    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #39ff14;
      top: 0;
      bottom: 0;
      left: 50%;
      transform: translateX(-2px);
      z-index: 1;
    }

    /* Cada recuadro de evento */
	.container {
  position: relative;
  background-color: transparent;
  border-radius: 12px;
  width: 45%;
  margin: 30px 0;
  animation: fadeIn 1s ease-in;
  cursor: pointer;
  height: 300px; /* Establecemos una altura fija para que frente y reverso coincidan */
}

/* Asegura que ambos lados usen toda la altura disponible */
.flip-inner {
  width: 100%;
  height: 100%;
}

.flip-front, .flip-back {
  height: 100%;
  padding: 20px 40px;
  box-sizing: border-box;
  background-color: #111;
  border-radius: 12px;
  box-shadow: 0 0 20px #39ff14;
}

/* Ajuste para la imagen en el reverso */
.flip-back img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 10px;
}


    /* Efecto de resplandor al pasar el mouse */
    .container:hover {
      box-shadow: 0 0 30px #39ff14;
      transition: box-shadow 0.3s ease;
    }

    /* Animación de entrada desde abajo */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Alineación izquierda/derecha de los eventos */
    .left {
      left: 0;
    }

    .right {
      left: 50%;
    }

    /* Círculo con el logo */
    .container::after {
      content: '';
      position: absolute;
      top: 20px;
      width: 60px;
      height: 60px;
      background-image: url('logo_cecyte.png'); /* Ruta del logo */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: 50%;
      border: 4px solid #39ff14;
      box-shadow: 0 0 15px #39ff14;
      z-index: 2;
    }

    .left::after {
      right: -30px;
    }

    .right::after {
      left: -30px;
    }

    /* Contenido dentro de la tarjeta */
    .content h3 {
      margin-top: 0;
    }

    .content img {
      width: 100%;
      border-radius: 10px;
      margin-top: 10px;
      cursor: pointer;
      transition: transform 0.3s;
    }

    /* Zoom suave al pasar el mouse sobre la imagen */
    .content img:hover {
      transform: scale(1.03);
    }

    /* --------------------- LIGHTBOX PARA VER IMAGEN AMPLIADA --------------------- */
    #lightbox {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 100;
    }

    #lightbox.active {
      display: flex;
    }

    #lightbox-img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 12px;
      box-shadow: 0 0 25px #39ff14;
    }

    /* --------------------- RESPONSIVE PARA CELULARES --------------------- */
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 31px;
      }

      .container {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      .left::after, .right::after {
        left: 15px;
      }

      .right {
        left: 0%;
      }
    }

    /* --------------------- EFECTO FLIP (VOLTEAR TARJETAS) --------------------- */
    .flip-card {
      background-color: transparent;
      perspective: 1000px; /* Efecto de profundidad al voltear */
    }

    .flip-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    /* Clase agregada con JS para voltear */
    .flipped .flip-inner {
      transform: rotateY(180deg);
    }

    /* Caras de la tarjeta (frontal y trasera) */
    .flip-front, .flip-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden; /* Oculta el reverso cuando no está visible */
      top: 0;
      left: 0;
    }

    .flip-front {
      z-index: 2;
    }

    .flip-back {
      transform: rotateY(180deg); /* Gira la cara trasera */
    }

    .flip-back img {
      width: 100%;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- Lightbox oculto inicialmente -->
  <div id="lightbox">
    <img id="lightbox-img" src="" alt="Imagen ampliada">
  </div>

  <!-- Contenedor de la línea del tiempo -->
  <div class="timeline" id="timeline">
    <!-- Aquí se insertan los eventos con JS -->
  </div>

  <script>
    // Lista de eventos históricos del CECyTE Puebla
    const eventos = [
      {
        fecha: "1996",
        descripcion: "Se funda el CECyTE en Puebla, iniciando con pocos planteles.",
        imagen: "https://colpue.edu.mx/uploads/2024/06/colpue-9.jpg"
      },
      {
        fecha: "2005",
        descripcion: "Expansión a más municipios del estado, aumentando la cobertura educativa.",
        imagen: "https://cecytepuebla.edu.mx/wp-content/uploads/2024/08/TLACO2-scaled.jpg"
      },
      {
        fecha: "2012",
        descripcion: "Reconocimiento a nivel nacional por su calidad educativa.",
        imagen: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeGEUC-kyMstSCkyhykiUIamdHrn4z9wo4YA"
      },
      {
        fecha: "2018",
        descripcion: "Incorporación de nuevas carreras técnicas y mejora de infraestructura.",
        imagen: "https://www.urbanopuebla.com.mx/wp-content/uploads/2024/01/cecyte.jpeg"
      },
      {
        fecha: "2024",
        descripcion: "CECyTE Puebla celebra sus logros con más de 50 planteles activos.",
        imagen: "https://cecytepuebla.edu.mx/wp-content/uploads/2024/08/Chigna13-1-scaled.jpg"
      }
    ];

    // Referencias a elementos del DOM
    const timeline = document.getElementById('timeline');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    // Generar dinámicamente las tarjetas de eventos
    eventos.forEach((evento, index) => {
      const lado = index % 2 === 0 ? 'left' : 'right'; // alternar izquierda/derecha
      const contenedor = document.createElement('div');
      contenedor.className = `container ${lado} flip-card`;

      // Agrega estructura HTML del frente y reverso
      contenedor.innerHTML = `
        <div class="flip-inner">
          <div class="flip-front">
            <div class="content">
              <h3>${evento.fecha}</h3>
              <p>${evento.descripcion}</p>
            </div>
          </div>
          <div class="flip-back">
            <div class="content">
              <img src="${evento.imagen}" alt="Evento ${evento.fecha}" onclick="abrirLightbox('${evento.imagen}')"/>
            </div>
          </div>
        </div>
      `;

      // Agrega el evento de clic para voltear la tarjeta
      contenedor.addEventListener('click', () => {
        contenedor.classList.toggle('flipped');
      });

      timeline.appendChild(contenedor);
    });

    // Mostrar la imagen ampliada en el lightbox
    function abrirLightbox(src) {
      lightboxImg.src = src;
      lightbox.classList.add('active');
    }

    // Cierra el lightbox al hacer clic en cualquier parte de él
    lightbox.addEventListener('click', () => {
      lightbox.classList.remove('active');
    });
  </script>
</body>
</html>
