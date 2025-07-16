document.addEventListener("DOMContentLoaded", function () {
    //Elementos del DOM
    const presupuestoDiv = document.getElementById("presupuesto");
    const presupuestoSelect = document.getElementById("presupuestoSelect");

    const infoFinancieraDiv = document.getElementById("infoFinanciera");
    const infoFinancieraSelect = document.getElementById("infoFinancieraSelect");
    
    const indicadoresDiv = document.getElementById("indicadores");
    const indicadoresSelect = document.getElementById("indicadoresSelect");

    const progPresupuestoDiv = document.getElementById("progPresupuesto");
    const progPresupuestoSelect = document.getElementById("progPresupuestoSelect");

    const ayudaSubsidiosDiv = document.getElementById("ayudaSubsidios");
    const ayudaSubsidiosSelect = document.getElementById("ayudaSubsidiosSelect");

    const inventariosDiv = document.getElementById("inventarios");
    const inventariosSelect = document.getElementById("inventariosSelect");


    //Añadir funcion a cada select
    //Informacion Presupuestal
    presupuestoSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "informe presupuestal", eleccion);
        if (archivos) {
            presupuestoDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                presupuestoDiv.innerHTML += `<a href=${respuesta.url} target="_blank"><li>${respuesta.name}</li></a>`;
            });
            presupuestoDiv.innerHTML += `</ul>`;
        } else {
            presupuestoDiv.innerHTML = ``;
        }
    });
    //Informacion financiera trimestal
    infoFinancieraSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "informacion financiera", eleccion);
        if (archivos) {
            infoFinancieraDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                infoFinancieraDiv.innerHTML += `<a href=${respuesta.url} target="_blank"><li>${respuesta.name}</li></a>`;
            });
            infoFinancieraDiv.innerHTML += `</ul>`;
        } else {
            infoFinancieraDiv.innerHTML = ``;
        }
    });
    //Indicadores de desempeño
    indicadoresSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "desempeno", eleccion);
        if (archivos) {
            indicadoresDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                indicadoresDiv.innerHTML += `<a href=${respuesta.url} target="_blank"><li>${respuesta.name}</li></a>`;
            });
            indicadoresDiv.innerHTML += `</ul>`;
        } else {
            indicadoresDiv.innerHTML = ``;
        }
    });
    //Programas presupuestarios
    progPresupuestoSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "programas presupuestarios", eleccion);
        if (archivos) {
            progPresupuestoDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                progPresupuestoDiv.innerHTML += `<a href=${respuesta.url} target="_blank"><li>${respuesta.name}</li></a>`;
            });
            progPresupuestoDiv.innerHTML += `</ul>`;
        } else {
            progPresupuestoDiv.innerHTML = ``;
        }
    });
    //Ayuda y Subsidios
    ayudaSubsidiosSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "ayuda subsidios", eleccion);
        if (archivos) {
            ayudaSubsidiosDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                ayudaSubsidiosDiv.innerHTML += `<a href=${respuesta.url} target="_blank"><li>${respuesta.name}</li></a>`;
            });
            ayudaSubsidiosDiv.innerHTML += `</ul>`;
        } else {
            ayudaSubsidiosDiv.innerHTML = ``;
        }
    });
    //Inventario
    inventariosSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "inventarios", eleccion);
        if (archivos) {
            inventariosDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                inventariosDiv.innerHTML += `<a href=${respuesta.url} target="_blank"><li>${respuesta.name}</li></a>`;
            });
            inventariosDiv.innerHTML += `</ul>`;
        } else {
            inventariosDiv.innerHTML = ``;
        }
    });
});
//Ya tienes la funcion que obtiene los pdfs, ahora tienes que conectarlo con el JS
async function getPdfs(folder, Directorio, subDir) {
    const data = {
        folder: folder,
        Directorio: Directorio,
        subDir: subDir
    };
    try {
        const peticion = await fetch(route('obtener.pdf',data), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
    
        if(!peticion.ok) throw new Error ('peticion fallida');

        return await peticion.json();
    } catch (error) {
        console.error(error);
    }

} 