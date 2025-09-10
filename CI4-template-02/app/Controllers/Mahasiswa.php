<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // tampil semua
    public function display()
{
    $data = [
        'title' => 'Daftar Mahasiswa',
        'content' => view('mahasiswa/display', ['title' => 'Daftar Mahasiswa',  'mahasiswa' => $this->mahasiswaModel->findAll()])
    ];
    return view('template', $data);
}

public function detail($nim)
{
    $mahasiswa = $this->mahasiswaModel->find($nim);

    if (!$mahasiswa) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan");
    }

    $data = [
        'title' => 'Detail Mahasiswa',
        'content' => view('mahasiswa/detail', ['mahasiswa' => $mahasiswa]) // ✅ kirim dengan key 'mahasiswa'
    ];

    return view('template', $data);
}

}