<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    public $table = "tours";

    public function categorias()
    {
        return $this->belongsToMany(Categorias::class);

    }
}
