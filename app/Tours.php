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

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categorie_id');
    }

    public function imagetour()
    {
        return $this->hasMany(Imagetours::class);
    }
}
