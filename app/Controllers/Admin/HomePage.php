<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class HomePage extends BaseController
{
    public function index(): string
    {
        return view('Admin/HomePage/index');
    }
}
