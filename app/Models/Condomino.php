<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condomino extends Model
{
    public function dependente()
    {
        return $this->hasMany('App\Models\Dependente');
    }

    public function reserva()
    {
        return $this->hasMany('App\Models\Reserva');
    }

    public function visitante()
    {
        return $this->hasMany('App\Models\Visitante');
    }
}
