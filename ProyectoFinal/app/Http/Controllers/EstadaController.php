<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Estada;

class EstadaController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function list() 
    { 
        $estadas = Estada::all();

        return view('estada.list', ['estadas' => $estadas]);
    }
    
    function new(Request $request) 
    {
        if ($request->isMethod('post')) {   
            $estada = new Estada;
            $estada->student_name = $request->student_name;
            $estada->cicle_id = $request->cicle_id;
            $estada->empresa_id = $request->empresa_id;
            $estada->evaluation = $request->evaluation;
            $estada->comment = $request->comment;
            $estada->dual = $request->dual;
            $estada->registered_by = $request->registered_by;
            $estada->curs_id = $request->curs_id;
            $estada->save();

            return redirect()->route('estada_list');
        }

        return view('estada.new');
    }

    function edit(Request $request, $id) 
    { 
        if ($request->isMethod('post')) {   
            $estada = Estada::find($id);
            $estada->student_name = $request->student_name;
            $estada->cicle_id = $request->cicle_id;
            $estada->empresa_id = $request->empresa_id;
            $estada->evaluation = $request->evaluation;
            $estada->comment = $request->comment;
            $estada->dual = $request->dual;
            $estada->registered_by = $request->registered_by;
            $estada->curs_id = $request->curs_id;
            $estada->save();

            return redirect()->route('estada_list');
        }      
        $estada = Estada::find($id);

        return view('estada.edit', ['estada' => $estada]);
    }

    function delete($id) 
    { 
        $estada = Estada::find($id);
        $estada->delete();

        return redirect()->route('estada_list');
    }
}