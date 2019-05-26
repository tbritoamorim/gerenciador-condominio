<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DependentesController extends Controller
{
    public function index() 
    {
        $dependentes = DB::table('dependentes')->get();

        return view('admin.dependentes.index', compact('dependentes'));
    }
}
