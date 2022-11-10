<?php

namespace App\Http\Controllers;
use App\Models\Clientes;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $clientes =  Clientes::all();

        return view('welcome', compact('clientes'));
    }
}
