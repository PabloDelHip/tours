<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

{{-- Hero --}}
<section>  
    <div class="hero" style="background: url({{ url('img/chichen-home.jpg')}}) no-repeat center fixed">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="texto-principal">RIVIERA MAYA</h3>
                </div>
                <div class="col-12 texto-secundario">
                    <h3 class="texto-secundario">Los mejores tours y actividades</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    
    {{-- componente Vue --}}
    <div id="app" class="content">
        <infotour-component></infotour-component>
    </div>
</section>

@stop
