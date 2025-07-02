@extends('layouts.app')


@section('title', 'CECyTE')
<link href="{{ asset('css/styles_pestanas_carrera.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

@section('content')
<div class="container-fluid">
    

    <!-- Otros includes -->
    <section><div>@include('components.mapa_carrusel')</div></section>
    <section><div>@include('components.pestanas_carrera')</div></section>
    <section><div>@include('components.mapa-Planteles')</div></section>
</div>

@push('scripts')
<script src="{{ asset('js/pestanas_carrera.js') }}"></script>
@endpush

@endsection
