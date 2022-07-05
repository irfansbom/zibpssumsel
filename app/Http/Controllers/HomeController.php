<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('main');
    }

    public function manajemenperubahan()
    {

        return view('areaperubahan.manajemenperubahan');
    }

    public function tatalaksana()
    {

        return view('areaperubahan.tatalaksana');
    }
    public function manajemensdm()
    {

        return view('areaperubahan.manajemensdm');
    }
    public function akuntabilitas()
    {

        return view('areaperubahan.akuntabilitas');
    }
    public function pengawasan()
    {

        return view('areaperubahan.pengawasan');
    }
    public function pelayananpublik()
    {

        return view('areaperubahan.pelayananpublik');
    }
}
