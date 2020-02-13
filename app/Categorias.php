<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public $table = "categories";

    public function tours()
    {
        return $this->belongsToMany(Tours::class);
    }

    public function onlyTour()
    {
        return $this->hasMany(Tours::class,'categories_id');
    }
}
