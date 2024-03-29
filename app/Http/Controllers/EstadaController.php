<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Estada;
use App\Models\Cicle;
use App\Models\Empresa;
use App\Models\Curs;
use App\Models\User;

class EstadaController extends Controller
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  function list(Request $request)
  {
    $estadas = Estada::join("empresas", "empresas.id", '=', 'estadas.empresa_id')->join("users", "users.id", '=', 'estadas.registered_by');

    if (isset($request->name)) {
      if ($request->name != "") {
        $estadas = $estadas->where('estadas.student_name', 'like', "%" . $request->name . "%");
      }
    }

    if (isset($request->curs)) {
      if ($request->curs != "") {
        $estadas = $estadas->where('estadas.curs_id', '=', $request->curs);
      }
    }

    if (isset($request->cicle)) {
      if ($request->cicle != "") {
        $estadas = $estadas->where('estadas.cicle_id', '=', $request->cicle);
      }
    }
    if (isset($request->registeredBy)) {
      if ($request->registeredBy != "") {
        $estadas = $estadas->where('users.name', 'like', "%" . $request->registeredBy . "%");
      }
    }

    if (isset($request->empresa)) {
      if ($request->empresa != "") {
        $estadas = $estadas->where('empresas.name', 'like', "%" . $request->empresa . "%");
      }
    }

    if (isset($request->tipus)) {
      if ($request->tipus != "") {
        $estadas = $estadas->where('estadas.dual', '=', $request->tipus);
      }
    }

    if (isset($request->minValoracio)) {
      if (!isset($request->maxValoracio) || $request->maxValoracio >= $request->minValoracio) {
        $estadas = $estadas->where('estadas.evaluation', '>=', $request->minValoracio);
      }
    }

    if (isset($request->maxValoracio)) {
      $estadas = $estadas->where('estadas.evaluation', '<=', $request->maxValoracio);
    }

    $estadas = $estadas->distinct("estadas.*")->orderBy('estadas.student_name', 'asc')->get("estadas.*");

    $cicles = Cicle::all();
    $empresas = Empresa::orderBy('name', 'asc')->get();
    $users = User::all();
    $cursos = Curs::all();
    $tutors = User::orderBy('name', 'asc')->get();

    return view('estada.list', ['estadas' => $estadas, 'cicles' => $cicles, 'empresas' => $empresas, 'users' => $users, 'cursos' => $cursos,
    'request' => $request, 'tutors' => $tutors]);
  }

  function detail(Request $request, $id)
  {
    $estada = Estada::find($id);
    if (!isset($estada->id)) {
      return redirect()->route('estada_list');
    }
    $cursos = Curs::all();
    $cicles = Cicle::all();
    $users = User::all();
    $empresas = Empresa::all();

    return view('estada.detail', ['estada' => $estada, 'cursos' => $cursos, 'cicles' => $cicles, 'users' => $users, 'empresas' => $empresas]);
  }

  function import(Request $request)
  {
      $file = fopen($_FILES["csv"]["tmp_name"], "r");
      $all_data = array();
      while (($data = fgetcsv($file, 0, ",")) !== FALSE ) {
      if ($data[3] != "student_name") {
          $estada = new Estada;
          $estada->student_name = $data[3];
          $estada->cicle_id = $data[4];
          $estada->empresa_id = $data[5];
          $estada->evaluation = $data[6];
          $estada->comment = $data[7];
          $estada->dual = $data[8];
          $estada->registered_by = $data[9];
          $estada->curs_id = $data[10];
          $estada->save();
      }
      }
      
      return redirect()->route('estada_list');
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

      if ($request->input('redirect_to') == 'empresa_detail') {
        return redirect()->route('empresa_detail', ['id' => $estada->empresa_id]);
      } else if ($request->input('redirect_to') == 'estada_list') {
        return redirect()->route('estada_list');
      }
    }
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

      return redirect()->route('estada_detail', ['id' => $estada->id]);
    }
  }

  function delete($id)
  {
    $estada = Estada::find($id);
    $estada->delete();

    return redirect()->route('estada_list');
  }
}
