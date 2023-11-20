<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Austria');
    }
    public function pagina2() :string
    {
        return view('Espana');
    }

    public function pagina3() :string
    {
        return view('Alemania');
    }
}
