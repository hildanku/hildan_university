<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BukuTamuModel;

class BukuTamu extends BaseController {
    protected $BukuTamuM;

    public function __construct()
    {
        $this->BukuTamuM = new BukuTamuModel();
    }
    public function index(): string
    {
        $data = $this->BukuTamuM->findAll();
        return view('Admin/BukuTamu/index', ['data'=> $data]);
    }
}