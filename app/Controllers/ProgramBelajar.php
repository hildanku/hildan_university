<?php

namespace App\Controllers;

class ProgramBelajar extends BaseController
{
    public function index(): string
    {
        return view('ProgramBelajar/index');
    }
}
