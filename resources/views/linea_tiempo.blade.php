<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Línea del Tiempo - CECyTE Puebla</title>
  <style>
    /* Estilos generales del cuerpo */
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f5f5f5;
      padding: 20px;
    }

    /* Título principal centrado */
    h1 {
      text-align: center;
      color: #006837;
    }

    /* Contenedor principal de la línea del tiempo */
    .timeline {
      position: relative;
      margin: 40px auto;
      padding: 10px 0;
      width: 100%;
      max-width: 1000px;
    }

    /* Línea vertical central */
    .timeline::after {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 50%;
      width: 4px;
      margin-left: -2px;
      background-color: #006837;
      z-index: 0;
    }

    /* Contenedor de cada evento */
    .container {
      position: relative;
      width: 50%;
      padding: 20px 30px;
      box-sizing: border-box;
    }

    /* Lado izquierdo */
    .left {
      left: 0;
    }

    /* Lado derecho */
    .right {
      left: 50%;
    }

    /* Punto redondo que representa cada evento */
    .container::after {
      content: '';
      position: absolute;
      top: 20px;
      width: 20px;
      height: 20px;
      background-color: white;
      border: 4px solid #006837;
      border-radius: 50%;
      z-index: 1;
    }

    /* Posición del punto a la derecha o izquierda */
    .left::after {
      right: -10px;
    }
    .right::after {
      left: -10px;
    }

    /* Contenido del evento */
    .content {
      background-color: white;
      padding: 20px;
      border-radius: 6px;
      position: relative;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      z-index: 1;
    }

    /* Imagen del evento */
    .content img {
      width: 100%;
      height: auto;
      max-height: 200px;
      object-fit: cover;
      border-radius: 6px;
      margin-top: 10px;
      transition: transform 0.3s ease;
      cursor: pointer;
    }

    /* Efecto al pasar el mouse sobre la imagen */
    .content img:hover {
      transform: scale(1.05);
    }

    /* Animación de entrada */
    .container {
      opacity: 0;
      transform: translateY(50px);
      animation: fadeInUp 0.8s ease forwards;
    }

    /* Animación para pares e impares */
    .container:nth-child(even) {
      animation-delay: 0.3s;
    }

    .container:nth-child(odd) {
      animation-delay: 0.6s;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Estilos responsive para pantallas medianas (tablets/móviles) */
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 20px;
      }

      .container {
        width: 100%;
        padding: 20px 20px 20px 60px;
      }

      .left, .right {
        left: 0%;
      }

      .left::after, .right::after {
        left: 15px;
      }

      .content {
        padding: 15px;
        font-size: 15px;
      }

      .content h3 {
        font-size: 18px;
        text-align: left;
      }

      .container {
        margin-bottom: 30px;
      }

      .content img {
        max-height: 150px;
      }
    }

    /* Ajustes adicionales para pantallas pequeñas (celulares) */
    @media screen and (max-width: 480px) {
      .container {
        padding-left: 50px;
        padding-right: 15px;
      }

      .left::after, .right::after {
        left: 10px;
      }

      .content {
        font-size: 14px;
      }

      .content h3 {
        font-size: 16px;
      }

      .content img {
        max-height: 120px;
      }
    }

    /* Estilos para el lightbox (imagen ampliada al hacer clic) */
    .lightbox {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      display: none;
      z-index: 999;
    }

    /* Mostrar lightbox activo */
    .lightbox.active {
      display: flex;
    }

    .lightbox img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- Título principal -->
  <h1>Línea del Tiempo - CECyTE Puebla</h1>

  <!-- Contenedor donde se insertarán dinámicamente los eventos -->
  <div class="timeline" id="timeline"></div>

  <!-- Lightbox para mostrar imagen en grande -->
  <div class="lightbox" id="lightbox">
    <img src="" alt="Vista ampliada" id="lightbox-img" />
  </div>

  <script>
    // Arreglo de eventos con fecha, descripción e imagen
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

    // Elementos del DOM
    const timeline = document.getElementById('timeline');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    // Crear e insertar cada evento en el DOM
    eventos.forEach((evento, index) => {
      const lado = index % 2 === 0 ? 'left' : 'right'; // alternar lados
      const contenedor = document.createElement('div');
      contenedor.className = `container ${lado}`;
      contenedor.innerHTML = `
        <div class="content">
          <h3>${evento.fecha}</h3>
          <p>${evento.descripcion}</p>
          <img src="${evento.imagen}" alt="Evento de ${evento.fecha}" onclick="abrirLightbox('${evento.imagen}')"/>
        </div>
      `;
      timeline.appendChild(contenedor);
    });

    // Función para abrir el lightbox con la imagen
    function abrirLightbox(src) {
      lightboxImg.src = src;
      lightbox.classList.add('active');
    }

    // Cerrar el lightbox al hacer clic en cualquier parte
    lightbox.addEventListener('click', () => {
      lightbox.classList.remove('active');
    });
  </script>

</body>
</html>
