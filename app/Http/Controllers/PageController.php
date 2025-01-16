<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
