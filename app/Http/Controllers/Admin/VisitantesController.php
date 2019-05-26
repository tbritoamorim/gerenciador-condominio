<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class VisitantesController extends Controller
{
    public function index() 
    {
        $visitantes = DB::table('visitantes')->get();
        return view('admin.visitantes.index', compact('visitantes'));
    }
}
