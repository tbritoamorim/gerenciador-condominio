<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condomino extends Model
{
    public function dependente()
    {
        return $this->hasMany('App\Models\Dependente');
    }
}
