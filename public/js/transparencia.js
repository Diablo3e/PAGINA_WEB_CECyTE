document.addEventListener("DOMContentLoaded", function(){
    //Elementos del DOM
    const presupuestoDiv = document.getElementById("presupuesto");
    const presupuestoSelect = presupuestoDiv.querySelector("select");

    const indicadoresDiv = document.getElementById("indicadores");
    const indicadoresSelect = indicadoresDiv.querySelector("select");

    const infoFinancieraDiv = document.getElementById("infoFinanciera");
    const infoFinancieraSelect = infoFinancieraDiv.querySelector("select");

    const inventariosDiv = document.getElementById("inventarios");
    const inventariosSelect = inventariosDiv.querySelector("select");
    
    
    //Añadir funcion a cada select
    presupuestoSelect.addEventListener("change", function(){
        const originalHTML = presupuestoDiv.innerHTML;
        presupuestoDiv.innerHTML += `<p><a href="{{ asset('public/samplePdf.pdf') }}">Sample link to sample pdf, i love samples</a></p>`
    });
});