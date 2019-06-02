<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = DB::table('reservas')->get();
        return view('admin.reserva.index', compact('reservas'));
    }
}
