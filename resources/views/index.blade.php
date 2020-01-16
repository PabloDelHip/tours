<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

{{-- Hero --}}
<section>  
    <div class="hero" style="background: url(img/chichen-home.jpg) no-repeat center fixed">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="texto-principal">RIVIERA MAYA</h3>
                </div>
                <div class="col-12 texto-secundario">
                    <h3 class="texto-secundario">Un Mundo Por Conocer</h3>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- mejores tours --}}
<section>
    <div class="container mt-5 top-tours">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Tours Economicos en Cancún y La Riviera Maya</h1>
                <h2>Disfruta de las mejores actividades con nosotros</h2>
            </div>

            <div class="col-3 tmb-tours-medianos">
                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologico</a>
                        <a class="tour" href="#">Coba</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos">
                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologico</a>
                        <a class="tour" href="#">Coba</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos">
                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologico</a>
                        <a class="tour" href="#">Coba</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos">
                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologico</a>
                        <a class="tour" href="#">Coba</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Tours mas populares --}}
<section>
    <div class="fondo-populares" style="background: url(img/tulum-fondo.jpg) no-repeat center fixed">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="titulo">Tours Mas Populares En Cancún y la Riviera Maya</h3>
                </div>
                <div class="col-12 text-center">
                    <h3 class="texto-secundario">Disfrutar de los Mejores tours y aventuras</h3>
                </div>

                <div class="col-12">
                    <section class="autoplay slider">
                        <div>
                            <div class="tmb-tours-medianos">
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tmb-tours-medianos">
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tmb-tours-medianos">
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                          <img src="http://placehold.it/350x300?text=4">
                        </div>
                        <div>
                          <img src="http://placehold.it/350x300?text=5">
                        </div>
                        <div>
                          <img src="http://placehold.it/350x300?text=6">
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
