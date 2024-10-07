<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        // Ambil data support jika diperlukan
        $supportInfo = []; // Tambahkan logika untuk mengambil data support

        return view('support.index', compact('supportInfo'));
    }
}
