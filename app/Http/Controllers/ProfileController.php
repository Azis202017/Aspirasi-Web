<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Status;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $aspirasi = Input::all();
        return view('profile',compact('aspirasi'));
    }
}
