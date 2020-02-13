<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Tours;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $tours = Tours::all()
                    ->where('see_home', '=',true)
                    ->where('active', '=',true);
        
        
        return view('sitio.index',compact('tours'));
    }

    public function categorias()
    {
        return view('sitio.tours');
    }
}
