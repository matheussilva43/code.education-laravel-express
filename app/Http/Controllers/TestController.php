<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nome)
    {
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas()
    {
        $notas = array('Anotação 1','Anotação 2','Anotação 3','Anotação 4','Anotação 5','Anotação 6');

        return view('test.notas', compact('notas'));
    }
}