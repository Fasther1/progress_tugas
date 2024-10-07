<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function explore()
    {
        // Ambil data yang diperlukan untuk dashboard (misalnya, statistik, grafik, dll.)
        // Misalnya, ambil data dari model atau layanan lain
        $data = []; // Tambahkan logika untuk mengambil data yang diperlukan

        return view('dashboard.blade.php', compact('data'));
    }
}
