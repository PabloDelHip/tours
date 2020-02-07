<template>
    <section>
        <button v-on:click="ordenarNombre()">Nombre</button>
        <div class="container">
            <div class="row tmb-tours-medianos tours-populares">
                <!-- v-for="tours in arrayTours" :key="tours.id" -->
                <div class="col-3 mt-4" v-for="tour in arrayTours" :key="tour.id">
                    <div class="row">
                        <div class="col-12 ico-tours-populares d-flex justify-content-between">
                            <img class="ico-top-categorias" :src="'../img/piramide-azteca.png'" alt="">
                            <span v-text=" '$'+tour.adult_discount_price"></span>
                        </div>
                    </div>
                    <div class="row fondo col-12 p-0 m-0 d-flex align-items-end">
                        <div class="fondo-color"></div>
                        <img :src="'../img/coba.jpg'" alt="">
                        <div class="col-12 texto">
                            <a class="categoria" href="#" v-text="categoria"></a>
                            <a class="tour" href="#" v-text="tour.name"></a>
                        </div>
                    </div>
                    <div class="col-12 texto-tours-populares">
                        <div v-html="tour.description"></div>
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
                urlCategoria: this.categoria
            }
        },
        methods:{
            getTours(){
                let me =this;
                let categoria = this.urlCategoria;
                var url = '/tours/public/tours/'+categoria;
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayTours = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            ordenarNombre(){
                alert('Hola');
                this.arrayTours =[];
            }
        },
        mounted() {
           this.getTours();
        }
    }
</script>
