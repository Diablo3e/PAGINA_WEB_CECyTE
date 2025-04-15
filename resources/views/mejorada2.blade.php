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

    /* Línea central brillante */
    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #00fff7;
      top: 0;
      bottom: 0;
      left: 50%;
      transform: translateX(-2px);
      z-index: 1;
    }

    /* --------------------- ESTILO DE CADA EVENTO --------------------- */
    .container {
      position: relative;
      background-color: #111;
      border-radius: 12px;
      box-shadow: 0 0 20px #00fff7;
      width: 45%;
      padding: 20px 40px;
      margin: 30px 0;
      animation: fadeIn 1s ease-in;
    }

    /* Glow suave al pasar el mouse */
    .container:hover {
      box-shadow: 0 0 30px #00fff7;
      transition: box-shadow 0.3s ease;
    }

    /* Animación al cargar */
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

    /* Alineación izquierda/derecha */
    .left {
      left: 0;
    }

    .right {
      left: 50%;
    }

    /* --------------------- CÍRCULO CON LOGO --------------------- */
    .container::after {
      content: '';
      position: absolute;
      top: 20px;
      width: 60px;
      height: 60px;
      background-image: url('logo_cecyte.png'); /* Puedes reemplazar por tu propia ruta */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: 50%;
      border: 4px solid #00fff7;
      box-shadow: 0 0 15px #00fff7;
      z-index: 2;
    }

    .left::after {
      right: -30px;
    }

    .right::after {
      left: -30px;
    }

    /* Contenido del evento */
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

    .content img:hover {
      transform: scale(1.03);
    }

    /* --------------------- LIGHTBOX --------------------- */
    #lightbox {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      display: flex;
      align-items: center;
      justify-content: center;
      display: none;
      z-index: 100;
    }

    #lightbox.active {
      display: flex;
    }

    #lightbox-img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 12px;
      box-shadow: 0 0 25px #00fff7;
    }

    /* --------------------- RESPONSIVE --------------------- */
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
  </style>
</head>
<body>

  <!-- Lightbox oculto -->
  <div id="lightbox">
    <img id="lightbox-img" src="" alt="Imagen ampliada">
  </div>

  <!-- Línea del tiempo -->
  <div class="timeline" id="timeline">
    <!-- Los eventos se insertan aquí con JS -->
  </div>

  <!-- --------------------- SCRIPT DE EVENTOS --------------------- -->
  <script>
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

    // Referencias al DOM
    const timeline = document.getElementById('timeline');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    // Crea dinámicamente cada evento
    eventos.forEach((evento, index) => {
      const lado = index % 2 === 0 ? 'left' : 'right';
      const contenedor = document.createElement('div');
      contenedor.className = `container ${lado}`;
      contenedor.innerHTML = `
        <div class="content">
          <h3>${evento.fecha}</h3>
          <p>${evento.descripcion}</p>
          <img src="${evento.imagen}" alt="Evento ${evento.fecha}" onclick="abrirLightbox('${evento.imagen}')"/>
        </div>
      `;
      timeline.appendChild(contenedor);
    });

    // Muestra la imagen ampliada
    function abrirLightbox(src) {
      lightboxImg.src = src;
      lightbox.classList.add('active');
    }

    // Cierra el lightbox al hacer clic fuera de la imagen
    lightbox.addEventListener('click', () => {
      lightbox.classList.remove('active');
    });
  </script>
</body>
</html>