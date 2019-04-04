<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    public function condomino()
    {
        return $this->belongsTo('App\Models\Condomino');
    }
}
