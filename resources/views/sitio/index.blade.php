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
                <h1>Tours Mas Populares En Cancún y la Riviera Maya</h1>
                <h2>Disfrutar de los Mejores tours y aventuras</h2>

                
            </div>
            
            @foreach($tours_economicos as $tour_economico)
                <div class="col-3 tmb-tours-medianos mb-4">
                    <div class="row fondo curva col-12 p-0 m-0 d-flex align-items-end">
                        <div class="fondo-color"></div>
                        <img src="{{ url('/img/tours_home/'.$tour_economico->image) }}" alt="">
                        <div class="col-12 texto">
                            <img src="{{ url('/img/iconos/'.$tour_economico->categoria['icono']) }}" alt="{{ url('/img/iconos/'.$tour_economico->categoria['icono']) }}">
                            
                            <a class="categoria" href="{{route("infoCategorias",['categoria'=> $tour_economico->categoria['url']])}}">
                                {{$tour_economico->categoria['name']}}
                            </a>
                            <a class="tour" href="{{route("InfomarcionTour",['tour'=> $tour_economico->url])}}">{{$tour_economico->name}}</a>
                        </div>
                    </div> 
                </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Tours mas populares --}}
<section>
    <div class="fondo-populares" style="background: url(img/tulum-fondo.jpg) no-repeat center fixed">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="titulo">Tours Economicos en Cancún y La Riviera Maya</h3>
                </div>
                <div class="col-12 text-center">
                    <h3 class="texto-secundario">Disfruta de las mejores actividades con nosotros</h3>
                </div>

                <div class="col-12 mt-5">
                    <section class="autoplay slider">
                        {{-- contenedor popular --}}
                        @foreach ($tours_populares as $tour_popular)
                            <div>
                                <div class="tmb-tours-medianos tours-populares">
                                    <div class="row">
                                        <div class="col-12 ico-tours-populares d-flex justify-content-between">
                                            <img style="width: 32px;" src="{{ url('/img/iconos/'.$tour_popular->categoria['icono']) }}" alt="{{ url('/img/iconos/'.$tour_popular->categoria['icono']) }}">
                                            <span>${{$tour_popular->adult_discount_price}}</span>
                                        </div>
                                    </div>
                                    <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                                        <div class="fondo-color"></div>
                                        <img src="{{ url('/img/tours_home/'.$tour_popular->image_normal) }}" alt="">
                                        <div class="col-12 texto">
                                            
                                            <a class="categoria" href="{{route("infoCategorias",['categoria'=> $tour_popular->url])}}">
                                                {{$tour_popular->categoria['name']}}
                                            </a>
                                            <a class="tour" href="{{route("InfomarcionTour",['tour'=> $tour_popular->url])}}">
                                                {{$tour_popular->name}}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 texto-tours-populares">
                                        <p>
                                            {{$tour_popular->meta_description}}
                                        </p>
                                        <div class="row d-flex justify-content-between mt-2">
                                            <div class="col-6">
                                                4 horas
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                @for ($i = 0; $i <= 4; $i++)
                                                    <img src="{{ url('/img/estrella_on.png') }}" alt=" estrella activa">
                                                @endfor
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>    
                        @endforeach
                        
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

            @foreach ($categorias as $categoria)
                <div class="col-3 tmb-tours-medianos mt-4">
                    <div class="row fondo curva categorias col-12 p-0 m-0 d-flex align-items-end">
                        <div class="fondo-color"></div>
                        <img src="{{ url('/img/categorias/'.$categoria->image) }}" alt="">
                        <div class="col-12 texto">
                            <img src="{{ url('/img/iconos/'.$categoria->icono) }}" alt="">
                            <a class="categoria" href="{{route("infoCategorias",['categoria'=> $categoria->url])}}">{{$categoria->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach

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
