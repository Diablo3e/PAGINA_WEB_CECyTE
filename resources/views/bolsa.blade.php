@extends('layouts.app')
@section('body-class', 'no-background')

@section('title', 'Bolsa de trabajo cecyte')

@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_bolsa.css') }}">
@endpush

<div class="bg-white">
    <div class="imgDiv ">
        <img class="mainImg img-fluid" src="./imagenes/Bolsa/main_img.jpg" alt="Bolsa de trabajo">
    </div>
    
    <div class="alinearContenido">
        <div class="txt-bolsa">
            <h2>Bolsa de trabajo</h2>
            <p>La Dirección de Vinculación es la responsable de generar convenios de colaboración y se encarga de realizar los trámites correspondientes para implementar acciones de cooperación, mediante la celebración de convenios entre el CECYTE Puebla y las diferentes Instituciones.</p>
        </div>
        
        <div class="divEmpleos py-3">
            <ol>
                <li>Empresa en 👉 <a href="https://www.grupogateway.mx">www.grupogateway.mx</a></li>
                <li><a href="https://www.occ.com.mx/candidatos/cuenta-nueva/registro/?utm_source=google&utm_medium=cpc&utm_campaign=21095626929&keyword=occ&gad_source=1&gad_campaignid=21095626929&gbraid=0AAAAADQ3s09cxB1vM_xavwkwKiKaP-D2m&gclid=Cj0KCQjws4fEBhD-ARIsACC3d29Oj6hvKoPVEr4GaE-A3X_ZgdRcuh6wOpi22XBckZl8MiCE46YsqR4aAuA-EALw_wcB">OCC empleos</a></li>
                <li><a href="https://www.empleo.gob.mx/PortalDigitali">SNE SERVICIO NACIONAL DE EMPLEO</a></li>
                <li><a href="https://mx.indeed.com/q-reci%C3%A9n-egresados-para-l-puebla,-pue.-empleos.html?aceid=&gad_source=1&gad_campaignid=18740264862&gbraid=0AAAAADes5imafDRymhnUBKuD3atXWIns9&gclid=Cj0KCQjws4fEBhD-ARIsACC3d29RPpP_iW5Hd3vhzPgGpjMQVnpXV8aORMdJg0VimjkpqAeafoWj9jAaAqcTEALw_wcB&gclsrc=aw.ds&vjk=ca9fc981455db544">INDEED</a></li>
            </ol>
        </div>
    </div>
    
@endsection
