<?php

namespace App\Controllers;

class BukuTamu extends BaseController
{
    public function index(): string
    {
        return view('BukuTamu/index');
    }
}
