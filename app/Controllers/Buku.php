<?php

// namespace App\Controllers\BukuModel;
namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $BukuModel;
    public function __construct()
    {
      $this->BukuModel = new BukuModel();
    }

    public function index(): string
    {
      $data = [
        'title' => 'Daftar Buku',
        'buku' => $this->BukuModel->getBuku()
      ];

      return view('buku/index', $data);
    }

    public function detail($idbuku)
    {
      $data = [
        'title' => 'Detail Buku',
        'buku' => $this->BukuModel->getBuku($idbuku)
      ];
      return view('buku/detail', $data);
    }
}
