<?php

namespace App\Controllers;

class Controlador extends BaseController
{
    public function index(): string
    {
        return view('main_page');
    }
}
