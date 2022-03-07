<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CanHo;

class IndexController extends Controller
{
    //
    public function index()
    {       
        return view('trangchu');
    }
}
