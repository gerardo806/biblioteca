<?php

namespace App\Controllers;
use App\Models\LibrosModel;

class PrincipalController extends BaseController
{
    public function index()
    {
        return view('templates/app');
    }

    public function home()
    {
        return view('templates/load/home');
    }

    public function list()
    {
        $libros = new LibrosModel();
        $datos = [
            'libros' => $libros->orderBy('id', 'ASC')->findAll()
        ];
        return view('templates/load/lista', $datos);
    }

    public function nuevo()
    {
        return view('templates/load/nuevo');
    }
}