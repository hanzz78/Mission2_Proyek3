<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function display()
    {
        $data = [
            'title' => 'Home',
            'content' => view ('welcome')
        ];
        return view ('template', $data);
    }
}
