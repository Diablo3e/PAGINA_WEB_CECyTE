document.addEventListener('DOMContentLoaded', () => {
    const sectores = [
      { nombre: "Empresas", color: "#B0163A", enlace: "https://cecytepuebla.edu.mx/Vinculacion/convenios2024/CONVENIOS2024.pdf" },
      { nombre: "Universidades Privadas", color: "#A2C617", enlace: "https://www.ejemplo2.com" },
      { nombre: "Universidades Publicas", color: "#F58220", enlace: "https://www.ejemplo3.com" },
      { nombre: "Hoteles y Restaurantes", color: "#058C42", enlace: "https://www.ejemplo4.com" },
      { nombre: "Descuentos para colaboradores", color: "#750D37", enlace: "https://www.ejemplo5.com" },
      { nombre: "Asociaciones Civiles", color: "#C61754", enlace: "https://www.ejemplo6.com" },
      { nombre: "Estancias Infantiles", color: "#7CB518", enlace: "https://www.ejemplo7.com" },
      { nombre: "Sector Gubernamental", color: "#F58220", enlace: "https://www.ejemplo8.com" },
      { nombre: "Otro", color: "#5A0B2C", enlace: "https://www.ejemplo10.com" },
    ];

    const radio = 200;
    const grupo = document.getElementById('sectors');
    const sectoresCount = sectores.length;
    const anguloPorSector = 360 / sectoresCount;

    sectores.forEach((sector, i) => {
      const anguloInicio = (i * anguloPorSector - 90) * Math.PI / 180;
      const anguloFin = ((i + 1) * anguloPorSector - 90) * Math.PI / 180;

      const x1 = Math.cos(anguloInicio) * radio;
      const y1 = Math.sin(anguloInicio) * radio;
      const x2 = Math.cos(anguloFin) * radio;
      const y2 = Math.sin(anguloFin) * radio;

      const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
      path.setAttribute("d", `M0,0 L${x1},${y1} A${radio},${radio} 0 0,1 ${x2},${y2} Z`);
      path.setAttribute("fill", sector.color);

      // Crear un enlace para cada sector
      const enlace = document.createElementNS("http://www.w3.org/2000/svg", "a");
      enlace.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", sector.enlace);
      enlace.setAttribute("target", "_blank");  // Asegura que el enlace se abra en una nueva pestaña

      // Agregar el path al enlace
      enlace.appendChild(path);

      // Colocar texto en el gráfico
      const angleText = (anguloInicio + anguloFin) / 2;
      const rx = Math.cos(angleText) * (radio * 0.6);
      const ry = Math.sin(angleText) * (radio * 0.6);
      const text = document.createElementNS("http://www.w3.org/2000/svg", "text");
      text.setAttribute("x", rx);
      text.setAttribute("y", ry);
      text.setAttribute("text-anchor", "middle"); // Centra el texto horizontalmente
      text.setAttribute("alignment-baseline", "middle"); // Centra el texto verticalmente

      // Función para dividir el texto en líneas
      const splitText = (text, maxLength) => {
        const words = text.split(' ');
        let lines = [];
        let currentLine = '';

        words.forEach(word => {
          if ((currentLine + word).length <= maxLength) {
            currentLine += word + ' ';
          } else {
            lines.push(currentLine.trim());
            currentLine = word + ' ';
          }
        });
        
        lines.push(currentLine.trim());
        return lines;
      };

      // Dividir el texto si es demasiado largo
      const maxTextLength = 12; // Limitar el número máximo de caracteres por línea
      const lines = splitText(sector.nombre, maxTextLength);

      // Crear un <tspan> para cada línea de texto
      lines.forEach((line, index) => {
        const tspan = document.createElementNS("http://www.w3.org/2000/svg", "tspan");
        tspan.setAttribute("x", rx);
        tspan.setAttribute("dy", index === 0 ? "0" : "1.2em");  // El primer texto no tiene desplazamiento vertical, los siguientes sí
        tspan.textContent = line;
        text.appendChild(tspan);
      });

      enlace.appendChild(text);

      enlace.addEventListener('mouseover', () => {
        path.setAttribute("transform", "scale(1.2)");  // Agranda el sector
        text.setAttribute("transform", "scale(1.2)");  // Agranda el texto
        text.style.fontWeight = "bold";  // Puedes cambiar la propiedad para hacerlo más notorio
        text.style.textShadow = "2px 2px 4px rgba(0, 0, 0, 0.75)";  // Sombra gris detrás del texto
      });

      enlace.addEventListener('mouseout', () => {
        path.setAttribute("transform", "scale(1)");  // Restaura el tamaño original del sector
        text.setAttribute("transform", "scale(1)");  // Restaura el tamaño original del texto
        text.style.fontWeight = "normal";  // Restaura el estilo del texto
        text.style.color = "#000000";  // Restaura el color original
        text.style.fontSize = "10px";  // Restaura el tamaño del texto
        text.style.textShadow = "none";  // Elimina la sombra
      });

      // Agregar el enlace al grupo de sectores
      grupo.appendChild(enlace);
    });
});
