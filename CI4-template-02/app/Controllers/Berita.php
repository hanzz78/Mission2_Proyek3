<?php

namespace App\Controllers;

class Berita extends BaseController
{
    public function display()
    {
        $data = [
            'title' => 'Berita',
            'content' => view ('beritaview')
        ];
        return view ('template', $data);
    }
}
