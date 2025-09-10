<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function index(): string
    {
       $data = [
              'title' => 'Home Page',
              'content' => view('home')
       ];

       return view('template', $data);
    }
}