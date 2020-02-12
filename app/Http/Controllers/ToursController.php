<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Tours;
use App\Imagetours;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function verInformacionTour($url)
    {
        return view('sitio.info_tour',compact('url'));
    }

    /////////////////////////////////////////////////////
    ////////////////RUTAS VUE////////////////////////////
    /////////////////////////////////////////////////////
    // seleccionar tours dependiendo la categoria
    public function categoriaTour($url)
    {
        $categorias_tours = Categorias::all()
                             ->where('url', '=',$url)
                             ->where('active', '=',true);
        
        foreach ($categorias_tours as $categoria) {
            $categoria_tours =  Categorias::findOrFail($categoria->id);
        }
        $tours = $categoria_tours->tours;
        return $tours;
    }

    public function getInformacionTour($url)
    {
        $info_tour = '';
        $informacion_tours = Tours::all()
                             ->where('url', '=',$url)
                             ->where('active', '=',true);
        
        foreach ($informacion_tours as $informacion_tour) {
            $info_tour =  Tours::findOrFail($informacion_tour->id);
        }
        array($info_tour, $info_tour->imagetour);
        return $info_tour;
    }

    public function getImageTour($id_tour)
    {
        $info_tour = Tours::all()
                        ->where('url','=',$url)
                        ->where('active','=',true);
        return $info_tour;
        echo $url;
    }
}
