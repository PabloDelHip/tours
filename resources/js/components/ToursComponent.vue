<template>
    <section>
        <!-- <button v-on:click="ordenarNombre()">Nombre</button> -->
        <div class="container">
            <div class="row tmb-tours-medianos tours-populares">
                <!-- v-for="tours in arrayTours" :key="tours.id" -->
                <div class="col-3 mt-4" v-for="tour in arrayTours" :key="tour.id">
                    <div class="row">
                        <div class="col-12 ico-tours-populares d-flex justify-content-between">
                            <img class="ico-top-categorias" :src="`../img/iconos/${icono}`" alt="">
                            <span v-text=" '$'+tour.adult_discount_price"></span>
                        </div>
                    </div>
                    <div class="row fondo col-12 p-0 m-0 d-flex align-items-end" style="height: 198px;">
                        <div class="fondo-color"></div>
                        <img :src="`../img/tours_home/${tour.image_normal}`" alt="">
                        <div class="col-12 texto">
                            <a class="tour" :href="`/tours/public/informacion/${tour.url}`" v-text="tour.name"></a>
                        </div>
                    </div>
                    <div class="col-12 texto-tours-populares">
                        <div v-html="tour.meta_description"></div>
                        <div class="row d-flex justify-content-between mt-2">
                            <div class="col-6">
                                <span v-text="tour.duration"></span>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <img v-for="item in 5" :src="'../img/estrella_on.png'" alt=" estrella activa">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['categoria'],
        data(){
            return{
                arrayTours:[],
                urlCategoria: this.categoria,
                icono: ''
            }
        },
        methods:{
            getTours(){
                let me =this;
                let categoria = this.urlCategoria;
                var url = '/tours/public/tours/'+categoria;
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayTours = response.data.tours;
                    me.icono = response.data.icono;
                    console.log(me.arrayTours);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
               
                
            },
            ordenarNombre(){
                
                this.arrayTours =[];
            }
        },
        mounted() {
           this.getTours();
        }
    }
</script>
