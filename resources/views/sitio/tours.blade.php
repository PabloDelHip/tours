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

{{-- Mejores tours --}}
<section>
    <div class="container mt-5 top-tours">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Tours Economicos en Cancún y La Riviera Maya</h1>
                <h2>Disfruta de las mejores actividades con nosotros</h2>
            </div>
        </div>
    </div>
</section>

<section>
    
    {{-- componente Vue --}}
    <div id="app" class="content">
        <tours-component categoria="{{$tour}}"></tours-component>
    </div>
</section>

@stop
