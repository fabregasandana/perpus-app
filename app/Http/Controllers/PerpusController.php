<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpusController extends Controller
{
    public function index(){
        return view ('user.homepage');
    }

    public function dashboard(){
        return view ('admin.index');
    }

    public function addData(){
        return view ('admin.create');
    }
}
