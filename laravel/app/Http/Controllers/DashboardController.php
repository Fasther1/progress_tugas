<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function explore()
    {
        
        
        $data = []; 

        return view('dashboard.blade.php', compact('data'));
    }
}
