<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Reserva;
use DB;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = DB::table('reservas')->get();
        return view('admin.reserva.index', compact('reservas'));
    }
    public function search()
    {
        $q = Input::get('q');
        if($q != ' ') {
        $reservas = Reserva::where('condomino_id', 'LIKE', '%' .$q. '%')
                                  ->orWhere('local', 'LIKE', '%' .$q. '%')
                                  ->orWhere('data_hora', 'LIKE', '%' .$q. '%')
                                  ->get();
            if(count($reservas) > 0) {
                return view('admin.reserva.index', compact('reservas'));
            }
        }
    }
}
