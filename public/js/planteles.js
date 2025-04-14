// Array con los nombres y URLs de los 19 planteles
const planteles = [
    { nombre: "Plantel 1", url: "https://plantel1.cecyte.edu.mx" },
    { nombre: "Plantel 2", url: "https://plantel2.cecyte.edu.mx" },
    { nombre: "Plantel 3", url: "https://plantel3.cecyte.edu.mx" },
    { nombre: "Plantel 4", url: "https://plantel4.cecyte.edu.mx" },
    { nombre: "Plantel 5", url: "https://plantel5.cecyte.edu.mx" },
    { nombre: "Plantel 6", url: "https://plantel6.cecyte.edu.mx" },
    { nombre: "Plantel 7", url: "https://plantel7.cecyte.edu.mx" },
    { nombre: "Plantel 8", url: "https://plantel8.cecyte.edu.mx" },
    { nombre: "Plantel 9", url: "https://plantel9.cecyte.edu.mx" },
    { nombre: "Plantel 10", url: "https://plantel10.cecyte.edu.mx" },
    { nombre: "Plantel 11", url: "https://plantel11.cecyte.edu.mx" },
    { nombre: "Plantel 12", url: "https://plantel12.cecyte.edu.mx" },
    { nombre: "Plantel 13", url: "https://plantel13.cecyte.edu.mx" },
    { nombre: "Plantel 14", url: "https://plantel14.cecyte.edu.mx" },
    { nombre: "Plantel 15", url: "https://plantel15.cecyte.edu.mx" },
    { nombre: "Plantel 16", url: "https://plantel16.cecyte.edu.mx" },
    { nombre: "Plantel 17", url: "https://plantel17.cecyte.edu.mx" },
    { nombre: "Plantel 18", url: "https://plantel18.cecyte.edu.mx" },
    { nombre: "Plantel 19", url: "https://plantel19.cecyte.edu.mx" },
];

// Función para mostrar la tabla de planteles
function mostrarTablaPlanteles() {
    const tabla = document.createElement("table");
    tabla.border = "1";
    tabla.style.width = "100%";
    tabla.style.textAlign = "left";

    const encabezado = tabla.insertRow();
    const thNombre = document.createElement("th");
    thNombre.textContent = "Nombre del Plantel";
    encabezado.appendChild(thNombre);

    planteles.forEach((plantel) => {
        const fila = tabla.insertRow();
        const celda = fila.insertCell();
        celda.textContent = plantel.nombre;
        celda.style.cursor = "pointer";
        celda.style.color = "blue";
        celda.style.textDecoration = "underline";

        // Redirigir al hacer clic
        celda.addEventListener("click", () => {
            window.location.href = plantel.url;
        });
    });

    // Agregar la tabla al cuerpo del documento
    document.body.appendChild(tabla);
}

// Llamar a la función para mostrar la tabla
mostrarTablaPlanteles();
