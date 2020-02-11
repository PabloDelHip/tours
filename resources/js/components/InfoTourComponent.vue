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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae pariatur doloremque nisi natus magni rerum? Modi blanditiis quaerat esse aperiam voluptas ex corrupti repellat. Perspiciatis nostrum sapiente tempore similique eos.</p>
                            </div>
                            <div v-if="ver==2" :key="2">
                                Soy dos
                            </div>
                            <div v-if="ver==3" :key="3">
                                <button @click="showSingle">Show single picture.</button>
                                <button @click="showMultiple">Show a group of pictures.</button>
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
                <div class="col-3">
                    
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
        data(){
            return{
                ver:1,
                arrayTours:[],
                imgs: '',  // Img Url , string or Array
                visible: false,
                index: 0   // default   
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
                // if (contenedor.classList.contains("efecto-principal")) {
                //         contenedor.classList.remove("active");

                //     }
                // if(event.target.className=='efecto-principal active')
                // console.log(event.target.id);
            
            },
            showSingle() {
            this.imgs = 'http://via.placeholder.com/350x150'
            this.show()
            },
            showMultiple() {
            this.imgs = ['http://via.placeholder.com/350x150', 'http://via.placeholder.com/350x150']
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
           
        }
    }
</script>
