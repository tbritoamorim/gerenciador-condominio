<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Condomino;
use DB;

class CondominosController extends Controller
{
    public function index()
    {
        $condominos = DB::table('condominos')->get();
        return view('admin.condominos.index', compact('condominos'));
    }
    public function search()
    {
        $q = Input::get('q');
        if($q != ' ') {
        $condominos = Condomino::where('nome', 'LIKE', '%' .$q. '%')
                                  ->orWhere('cpf', 'LIKE', '%' .$q. '%')
                                  ->orWhere('apto', 'LIKE', '%' .$q. '%')
                                  ->get();
            if(count($condominos) > 0) {
                return view('admin.condominos.index', compact('condominos'));
            }
        }
    }
}
