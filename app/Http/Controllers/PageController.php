<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    public function welcome()
    {
        return 'Selamat Datang Bolo';
    }

    public function about()
    {
        return 'Fahmi Mardiansyah | 2241760064';
    }

    public function articles()
    {
        return 'Halaman Artikel dengan Id: 07';
    }
}

