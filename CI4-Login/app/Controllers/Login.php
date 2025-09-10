<?php
namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login Page',
            'content' => view('login')
        ];

        return view('template', $data);
    }

    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $nim = $this->request->getPost('username'); // form pakai input name="username"
        $password = $this->request->getPost('password');

        // cari user di database berdasarkan nim
        $user = $userModel->getUser($nim);

        if ($user) {
            // cek password pakai md5
            if (md5($password) === $user['password']) {
                // login sukses → simpan session
                $session->set([
                    'nim'       => $user['nim'],
                    'nama'      => $user['nama_lengkap'],
                    'logged_in' => true
                ]);
                return redirect()->to('/home');
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
