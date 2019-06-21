<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Visitante;
use DB;

class VisitantesController extends Controller
{
    public function index() 
    {
        $visitantes = DB::table('visitantes')->get();
        return view('admin.visitantes.index', compact('visitantes'));
    }
    public function search()
    {
        $q = Input::get('q');
        if($q != ' ') {
        $visitantes = Visitante::where('nome', 'LIKE', '%' .$q. '%')
                                  ->orWhere('cpf', 'LIKE', '%' .$q. '%')
                                  ->get();
            if(count($visitantes) > 0) {
                return view('admin.visitantes.index', compact('visitantes'));
            }
        }
    }
}
