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

{{-- Mejores tours --}}
<section>
    <div class="container mt-5 top-tours">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Tours Economicos en Cancún y La Riviera Maya</h1>
                <h2>Disfruta de las mejores actividades con nosotros</h2>
            </div>

            <div class="col-3 tmb-tours-medianos">
                <div class="row fondo curva col-12 p-0 m-0 d-flex align-items-end">
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
                <div class="row fondo curva col-12 p-0 m-0 d-flex align-items-end">
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
                <div class="row fondo curva col-12 p-0 m-0 d-flex align-items-end">
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
                <div class="row fondo curva col-12 p-0 m-0 d-flex align-items-end">
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

                <div class="col-12 mt-5">
                    <section class="autoplay slider">
                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- contenedor popular --}}
                        <div>
                            <div class="tmb-tours-medianos tours-populares">
                                <div class="row">
                                    <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                        <img class="ico-top-categorias" src="{{ url('/img/piramide-azteca.png') }}" alt="">
                                        <span>$2400</span>
                                    </div>
                                </div>
                                <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                    <div class="fondo-color"></div>
                                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                                    <div class="col-12 texto">
                                        <a class="categoria" href="#">Arqueologico</a>
                                        <a class="tour" href="#">Coba</a>
                                    </div>
                                </div>
                                <div class="col-12 texto-tours-populares">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corrupti nihil, ratione consequuntur debitis asperiores repellat dicta hic</p>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <div class="col-6">
                                            4 horas
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                            <img src="{{ url('/img/estrella_off.png') }}" alt=" estrella activa">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Categorias tours --}}
<section>
    <div class="container mt-5 top-tours">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Las Experiencias Mas Populares De Cancún</h1>
                <h2>Explora las diferentes aventuras que te ofrece Cancún y La Riviera Maya</h2>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

            <div class="col-3 tmb-tours-medianos mt-4">
                <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                    <div class="fondo-color"></div>
                    <img src="{{ url('/img/coba.jpg') }}" alt="">
                    <div class="col-12 texto">
                        <img src="{{ url('/img/piramide-azteca.png') }}" alt="">
                        <a class="categoria" href="#">Arqueologicos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Tour en promocion --}}
<section>
    <div class="fondo-populares" style="background: url(img/fondo-tour-promo.jpg) no-repeat center fixed">
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 text-center promocion">
                    <h3 class="titulo mt-4">Tour en promoción</h3>
                    <p class="tour mt-4">Tour 4x1 (Tulum, Coba, Cenote y Playa Del Carmen)</p>
                    <p class="descripcion" >$750 / 12 Horas / Combos</p>
                    <a href="#"> Contactanos <i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
