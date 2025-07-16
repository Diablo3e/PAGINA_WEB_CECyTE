document.addEventListener("DOMContentLoaded", function () {
    //Elementos del DOM
    const presupuestoDiv = document.getElementById("presupuesto");
    const presupuestoSelect = document.getElementById("presupuestoSelect");

    const indicadoresDiv = document.getElementById("indicadores");
    const indicadoresSelect = document.getElementById("indicadoresSelect");

    const infoFinancieraDiv = document.getElementById("infoFinanciera");
    const infoFinancieraSelect = document.getElementById("infoFinancieraSelect");

    const progPresupuestoDiv = document.getElementById("progPresupuesto");
    const progPresupuestoSelect = document.getElementById("progPresupuestoSelect");

    const ayudaSubsidiosDiv = document.getElementById("ayudaSubsidios");
    const ayudaSubsidiosSelect = document.getElementById("ayudaSubsidiosSelect");

    const inventariosDiv = document.getElementById("inventarios");
    const inventariosSelect = document.getElementById("inventariosSelect");


    //Añadir funcion a cada select
    presupuestoSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", "informe presupuestal", eleccion);
        if (archivos) {
            presupuestoDiv.innerHTML = ``;
            archivos.forEach(respuesta => {
                presupuestoDiv.innerHTML += `<a href=${respuesta.url}><p>${respuesta.name}</p></a>`;
            });
        } else {
            presupuestoDiv.innerHTML = ``;
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