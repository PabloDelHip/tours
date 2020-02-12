<template>
    <section>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div id="contenedor_uno" class="col-7 contenedor-info-tour pt-4 pb-4">
                    <a href="javascript: void(0)" id="primera_vista" @click="verComponente(1,this)" class="efecto-principal active">
                        <img :src="'../img/iconos/mapa.png'" alt="icono informacion">
                        Descripción
                    </a>
                    <a href="javascript: void(0)" id="segunda_vista" @click="verComponente(2,this)" class="efecto-principal">
                        <img :src="'../img/iconos/informacion.png'" alt=" icono mapa">
                        Información
                    </a>
                    <a href="javascript: void(0)" id="tercera_vista" @click="verComponente(3,this)" class="efecto-principal">
                        <img :src="'../img/iconos/fotos.png'" alt="icono fotos">
                        Galeria
                    </a>
                    
                    <div class="mt-5">
                        <transition name="fade" mode="out-in">
                            <div v-if="ver==1" :key="1">
                                <h3>INFORMACIÓN IMPORTANTE DEL TOUR</h3>
                                <span v-html="array_info_tours.description"></span>
                            </div>
                            <div v-if="ver==2" :key="2">
                                <span v-html="array_info_tours.description_information"></span>
                            </div>
                            <div v-if="ver==3" :key="3">
                                
                                <div class="row">
                                    <div class="col-4" v-for="image_tour in array_img_tours" :key="image_tour.id">
                                        <a href="javascript: void(0)" @click="showMultiple()">
                                            <img class="tmb-tours" :src="`../img/tours/${image_tour.tmb}`" alt="" width="100%">
                                        </a>     
                                    </div>
                                </div>
                                <VueEasyLightbox
                                :visible="visible"
                                :imgs="imgs"
                                :index="index"
                                @hide="handleHide"
                                ></VueEasyLightbox>
                            </div>
                        </transition>
                    </div>
                    
                    
                </div>
                <div class="col-3 detalles-tour">
                    <span class="titulo-detalle">DETALLES DEL TOUR</span>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="primer-texto">Tipo tour: </span>
                            <span class="segundo-texto">
                                <a href="#">Aventura</a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="primer-texto">Duración: </span>
                            <span class="segundo-texto">
                                7 horas
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="primer-texto">Precio Adultos: </span>
                            <span class="segundo-texto precio">
                                $800 
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="primer-texto">Precio niños: </span>
                            <span class="segundo-texto precio">
                                $600 
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="primer-texto">Calificación: </span>
                            <span>
                                <img v-for="item in 5" :src="'../img/estrella_on.png'" alt=" estrella activa">
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <a href="#" class="efecto-principal">
                               <i class="fab fa-whatsapp"></i> Solicita información por whatsapp
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <a href="#" class="efecto-secundario">
                                <i class="fas fa-envelope"></i> Solicita información por email
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios';
    import VueEasyLightbox from 'vue-easy-lightbox'

    export default {
        
        components: {
            VueEasyLightbox
        },
        props: ['url_tour'],
        data(){
            return{
                ver:1,
                array_info_tours:[],
                array_img_tours:[],
                imgs: [],  // Img Url , string or Array
                visible: false,
                index: 0,   // default
                _url_tour: this.url_tour,  
            }
        },
        methods:{
            verComponente(numComponente){
                this.ver = numComponente;
                let id_vista = event.target.id;
                console.log(id_vista);
                let contenedor = document.querySelector(`#${id_vista}`);

                let contenedor_uno = document.querySelector(`#primera_vista`);
                let contenedor_dos = document.querySelector(`#segunda_vista`);
                let contenedor_tres = document.querySelector(`#tercera_vista`);

                contenedor_uno.classList.remove("active");
                contenedor_dos.classList.remove("active");
                contenedor_tres.classList.remove("active");

                contenedor.classList.add('active');
            
            },
            getInfoTours(){

                let me =this;
                var url = '/tours/public/info-tour/'+this.url_tour;
                console.log(url);
                axios.get(url).then(function (response) {

                    me.array_info_tours = response.data;
                    me.array_img_tours = response.data.imagetour;
                    const imagenes = response.data.imagetour;

                   

                    imagenes.forEach(function(imagen) {
                        // console.log(element.image);
                        // this.seleccionados.push(asiento);
                        me.imgs.push('../img/tours/'+imagen.image)
                    });
                    console.log(me.imgs);
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
                
            },
            showMultiple() {
            // this.imgs = this.array_img_tours;
            this.index = 0  // index of imgList
            this.show()
            },
            show() {
            this.visible = true
            },
            handleHide() {
            this.visible = false
            }
        },
        mounted() {
           this.getInfoTours();
        }
    }
</script>
