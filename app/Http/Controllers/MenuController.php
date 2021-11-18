<?php

namespace App\Http\Controllers;

use App\Models\Idolaku;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('home', [
            'active' => 'home'
        ]);
    }
    public function inisialisasi()
    {
        return view('inisialisasi',[
            'active' => 'inisialisasi'
        ]);
    }
    public function idolaku()
    {
        return view('idolaku', [
            'data' => Idolaku::all(),
            'active' => 'idolaku'
        ]);
    }
}
