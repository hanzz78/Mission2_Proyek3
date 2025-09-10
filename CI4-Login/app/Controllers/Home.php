<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function display()
    {
        if (! session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'title'   => 'Home',
            'content' => '<h2>Selamat datang, '.session()->get('username').'!</h2>
                          <p>Kamu berhasil login </p>'
        ];

        return view('template', $data);
    }
}
