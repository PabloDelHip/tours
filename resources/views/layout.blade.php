<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tours</title>


        {{-- Fontawesome --}}
        <script src="https://kit.fontawesome.com/e3ec99f96b.js" crossorigin="anonymous"></script>

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        {{-- Css --}}
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">

        {{-- Slick Slider--}}
        <link rel="stylesheet" type="text/css" href="{{ url('/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/slick/slick-theme.css') }}">

        {{-- Slick Slider--}}
        <style>
        .slider {
            width: 100%;
            /* margin: 100px auto; */
        }

        .slick-slide {
        margin: 0px 20px;
        }

        .slick-slide img {
        width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
        color: black;
        }


        .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
        }
        
        .slick-active {
        opacity: 1;
        }

        .slick-current {
        opacity: 1;
        }
        </style>
    </head>
    <body>

        {{-- Header --}}
        <header>
            {{-- Lista Header --}}
            <div class="container">
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fas fa-envelope"></i> &nbsp; contacto@tours.com</a>
                    </li>
                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fas fa-phone-alt"></i> &nbsp; 99-88-77-66-55</a>
                    </li>
                </ul>
            </div>
        </header>

        {{-- Menu de navegacion --}}
        <div class="contenedor-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="{{ url('/img/logo.png') }}" alt="Logo cancun">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto pull-xs-right">
                                
                        </ul>
                        <ul class="nav navbar-nav pull-xs-right">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Arqueologicos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Aventuras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nosotros</a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                            </li> --}}
                        </ul>   
                    </div>
                </nav>
            </div>
        </div>

        {{-- Contenedor Yield  --}}
        <div>
            @yield('contenido')
        </div>

        {{-- Footer --}}
        <footer>
            <div class="container">
                <div class="row datos-footer">
                    <div class="col-4 primer-contenedor">
                        <img src="{{ url('/img/logo.png') }}" alt="Logo cancun">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis magni nam rerum corporis nesciunt quidem distinctio ratione aspernatur praesentium officia qui omnis quos ullam, sapiente pariatur. Atque aut soluta vel.</p>
                    </div>

                    <div class="col-4">
                        <h4 class="titulo-footer">Contactanos</h4>
                        <ul>
                            <li>
                                <i class="fas fa-envelope"></i> &nbsp; contacto@tours.com</a> 
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i> &nbsp; 99-88-77-66-55</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row copy">
                <div class="col-12 text-center">
                    <p style="color: #fff;"> © 2019. Todos los Derechos Reservados <b>Agencia de tours</b>.</p>
                </div>
            </div>
        </footer>

        {{-- bootstrap  --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        {{-- SLICK SLIDER --}}
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src=" {{ url('/slick/slick.js') }} " type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {
                $('.autoplay').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    // autoplay: true,
                    autoplaySpeed: 2000,
                });
            });
        </script>

    </body>
</html>
