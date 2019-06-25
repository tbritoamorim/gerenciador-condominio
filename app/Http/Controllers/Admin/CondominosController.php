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
    public function create()
    {
        return view('admin.condominos.create');
    }
    public function edit ($id)
    {
        $condomino = Condomino::find($id);

        return view('admin.condominos.edit', compact('condomino', 'id'));
    }
    public function update (Request $request, $id)
    {
        $condomino = Condomino::find($id);
        $condomino->apto = $request->get('apto');
        $condomino->nome = $request->get('nome');
        $condomino->email = $request->get('email');
        $condomino->cpf = $request->get('cpf');
        $condomino->rg = $request->get('rg');
        $condomino->data_nascimento = $request->get('data_nascimento');
        $condomino->sexo = $request->get('sexo');
        $condomino->telefone_fixo = $request->get('telefone_fixo');
        $condomino->celular = $request->get('celular');
        $condomino->vaga_apto = $request->get('vaga_apto');
        $condomino->save();
        return redirect()->route('admin.condominos.index');
    }
}
