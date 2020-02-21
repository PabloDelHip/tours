<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Tours;
use App\categorias;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $categorias_populares =  Categorias::findOrFail(4);
        $categorias_economicos =  Categorias::findOrFail(5);
        
        $tours_populares = $categorias_populares->tours;
        $tours_economicos = $categorias_economicos->tours;
        
        $categorias = Categorias::all()
                        ->where('see_home', '=',true)
                        ->where('active', '=',true);

        return view('sitio.index',compact('tours_populares','tours_economicos','categorias'));
    
    }

    public function categorias($tour)
    {
        return view('sitio.tours',compact('tour'));
    }
}
