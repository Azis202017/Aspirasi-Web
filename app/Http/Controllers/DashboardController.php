<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        
        return view('dashboard');
    }
}
