<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AuditoriaController extends Controller
{
    public function index()
    {

        $audit = Audit::orderBy('id', 'DESC')->get();

        return view('auditoria.auditoria', compact('audit'));
    }

    public function showAudit(Request $request){

        $audit = Audit::find($request->id);

        return view('auditoria.auditoriaDetalhe', compact('audit'));
    }


}
