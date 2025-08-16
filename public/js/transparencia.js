document.addEventListener("DOMContentLoaded", function () {
    //Elementos del DOM y listener para resetear acordiones si el usuario los cierra
    const presupuestoDiv = document.getElementById("presupuesto");
    const presupuestoSelect = document.getElementById("presupuestoSelect");
    document.getElementById("c1").addEventListener("hidden.bs.collapse", () => {resetAcordion(presupuestoSelect, presupuestoDiv)});

    const infoFinancieraDiv = document.getElementById("infoFinanciera");
    const infoFinancieraSelect = document.getElementById("infoFinancieraSelect");
    document.getElementById("c2").addEventListener("hidden.bs.collapse", () => {resetAcordion(infoFinancieraSelect, infoFinancieraDiv)});
    
    const indicadoresDiv = document.getElementById("indicadores");
    const indicadoresSelect = document.getElementById("indicadoresSelect");
    document.getElementById("c3").addEventListener("hidden.bs.collapse", () => {resetAcordion(indicadoresSelect, indicadoresDiv)});

    const progPresupuestoDiv = document.getElementById("progPresupuesto");
    const progPresupuestoSelect = document.getElementById("progPresupuestoSelect");
    document.getElementById("c4").addEventListener("hidden.bs.collapse", () => {resetAcordion(progPresupuestoSelect, progPresupuestoDiv)});

    const ayudaSubsidiosDiv = document.getElementById("ayudaSubsidios");
    const ayudaSubsidiosSelect = document.getElementById("ayudaSubsidiosSelect");
    document.getElementById("c5").addEventListener("hidden.bs.collapse", () => {resetAcordion(ayudaSubsidiosSelect, ayudaSubsidiosDiv)});

    const inventariosDiv = document.getElementById("inventarios");
    const inventariosSelect = document.getElementById("inventariosSelect");
    document.getElementById("c6").addEventListener("hidden.bs.collapse", () => {resetAcordion(inventariosSelect, inventariosDiv)});


    //Añadir funcion a cada select
    //Informacion Presupuestal
    presupuestoSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", ["informe presupuestal", eleccion]);
        if (archivos) {
            presupuestoDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                presupuestoDiv.innerHTML += elementoHtmlGeneral(respuesta.name, respuesta.url);
            });
            presupuestoDiv.innerHTML += `</ul>`;
        } else {
            presupuestoDiv.innerHTML = ``;
        }
    });
    //Informacion financiera trimestal
    infoFinancieraSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", ["informacion financiera", eleccion]);
        if (archivos) {
            infoFinancieraDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                infoFinancieraDiv.innerHTML += elementoHtmlGeneral(respuesta.name, respuesta.url);
            });
            infoFinancieraDiv.innerHTML += `</ul>`;
        } else {
            infoFinancieraDiv.innerHTML = ``;
        }
    });
    //Indicadores de desempeño
    indicadoresSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", ["desempeno", eleccion]);
        if (archivos) {
            indicadoresDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                indicadoresDiv.innerHTML += elementoHtmlGeneral(respuesta.name, respuesta.url);
            });
            indicadoresDiv.innerHTML += `</ul>`;
        } else {
            indicadoresDiv.innerHTML = ``;
        }
    });
    //Programas presupuestarios
    progPresupuestoSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", ["programas presupuestarios", eleccion]);
        if (archivos) {
            progPresupuestoDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                progPresupuestoDiv.innerHTML += elementoHtmlGeneral(respuesta.name, respuesta.url);
            });
            progPresupuestoDiv.innerHTML += `</ul>`;
        } else {
            progPresupuestoDiv.innerHTML = ``;
        }
    });
    //Ayuda y Subsidios
    ayudaSubsidiosSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", ["ayuda subsidios", eleccion]);
        if (archivos) {
            ayudaSubsidiosDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                ayudaSubsidiosDiv.innerHTML += elementoHtmlGeneral(respuesta.name, respuesta.url);
            });
            ayudaSubsidiosDiv.innerHTML += `</ul>`;
        } else {
            ayudaSubsidiosDiv.innerHTML = ``;
        }
    });
    //Inventario
    inventariosSelect.addEventListener("change", async function () {
        const eleccion = this.value;
        const archivos = await getPdfs("transparencia", ["inventarios", eleccion]);
        if (archivos) {
            inventariosDiv.innerHTML = `<ul>`;
            archivos.forEach(respuesta => {
                inventariosDiv.innerHTML += elementoHtmlGeneral(respuesta.name, respuesta.url);
            });
            inventariosDiv.innerHTML += `</ul>`;
        } else {
            inventariosDiv.innerHTML = ``;
        }
    });

    //Devolver acordeones a su estado original si se cierran

});

//Coneccion con PdfController para obtener los pdfs
async function getPdfs(folder, subDirectorios) {
    try {
        const peticion = await fetch(route('obtener.pdf',folder), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({subDirectorios})
        });
    
        if(!peticion.ok) throw new Error ('peticion fallida, Numero:' + peticion.status + ' Texto: ' + peticion.statusText);
        return await peticion.json();
    } catch (error) {
        console.error(error);
    }
} 

//Generalizar elemento html añadido para facilitar cambios
function elementoHtmlGeneral(nombre, url){
    const htmlString = `<a href=${url} target="_blank" style="color: gray;"><li>${nombre}</li></a>`
    return htmlString;
}

//Devolver acordeon al estado original
function resetAcordion(select, PDFsDiv){
    select.selectedIndex = 0;
    PDFsDiv.innerHTML = '';
}