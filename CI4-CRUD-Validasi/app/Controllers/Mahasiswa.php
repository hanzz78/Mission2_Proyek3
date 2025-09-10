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
        'content' => view('mahasiswa/display', ['mahasiswa' => $this->mahasiswaModel->findAll(), 'title' => 'Daftar Mahasiswa'])
    ];
    return view('template', $data);
}


    // form tambah
   public function create()
{
    $data = [
        'title' => 'Tambah Mahasiswa'
    ];
    return view('mahasiswa/create', $data);
}

    // simpan data baru
    public function store()
    {
        $this->mahasiswaModel->insert([
            'nim'  => $this->request->getPost('nim'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'umur' => $this->request->getPost('umur'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    // form edit
    public function edit($nim)
{
    $data = [
        'title' => 'Edit Mahasiswa',
        'mahasiswa' => $this->mahasiswaModel->find($nim)
    ];
    return view('mahasiswa/edit', $data);
}


    // update data lama
    public function update($nim)
    {
        $this->mahasiswaModel->update($nim, [
            'nim'  => $this->request->getPost('nim'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'umur' => $this->request->getPost('umur'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    // hapus
    public function delete($nim)
    {
        $this->mahasiswaModel->delete($nim);
        return redirect()->to('/mahasiswa');
    }

public function detail($nim)
{
    $mahasiswa = $this->mahasiswaModel->find($nim);

    if (!$mahasiswa) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan");
    }

    $data = [
        'title' => 'Detail Mahasiswa',
        'content' => view('mahasiswa/detail', ['mahasiswa' => $mahasiswa]) 
    ];

    return view('template', $data);
}


}