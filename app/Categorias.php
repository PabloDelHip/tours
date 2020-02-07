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
}
