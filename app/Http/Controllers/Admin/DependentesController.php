<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Dependente;
use DB;

class DependentesController extends Controller
{
    public function index() 
    {
        $dependentes = DB::table('dependentes')->get();

        return view('admin.dependentes.index', compact('dependentes'));
    }
    public function search()
    {
        $q = Input::get('q');
        if($q != ' ') {
        $dependentes = Dependente::where('nome', 'LIKE', '%' .$q. '%')
                                  ->orWhere('cpf', 'LIKE', '%' .$q. '%')
                                  ->orWhere('apto', 'LIKE', '%' .$q. '%')
                                  ->get();
            if(count($dependentes) > 0) {
                return view('admin.dependentes.index', compact('dependentes'));
            }
        }
    }
}
