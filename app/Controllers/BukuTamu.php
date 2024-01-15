<?php

namespace App\Controllers;
use App\Models\BukuTamuModel;
class BukuTamu extends BaseController
{
    protected $BukuTamuM;

    public function __construct()
    {
        $this->BukuTamuM = new BukuTamuModel();
    }

    public function index(): string
    {
        $data = $this->BukuTamuM->findAll();
        return view('BukuTamu/index', ['data'=> $data]);
    }
    public function store()
    {
        $data = [
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'pesan' => $this->request->getPost('pesan'),
        ];
        if ($this->BukuTamuM->save($data))
        {
            session()->setFlashdata('success', 'Data telah dikirimkan.');
            return redirect()->to('/bukutamu');
        } else {
            session()->setFlashdata('success', 'Data gagal dikirimkan, periksa kembali input anda. ');
            return redirect()->to('/bukutamu');
        }

    }
}
