@extends('layouts.app')

@section('title', 'Convenios')
<link href="{{ asset(path: 'css/styles_convenios.css') }}" rel="stylesheet">

@section('body-class', 'no-background')

@section('title', 'Convenios')

@section('content')
<div class="convenios-container">
  <svg id="pizza" width="500" height="500" viewBox="0 0 500 500">
    <g id="sectors" transform="translate(250,250)"></g>
    <!-- Logo central -->
    <circle cx="250" cy="250" r="80" fill="white" />
    <image href="{{ asset('imagenes/LOGO_CIRCULAR.png') }}" x="190" y="190" width="120" height="120" />
  </svg>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/convenio.js') }}"></script>
@endpush
