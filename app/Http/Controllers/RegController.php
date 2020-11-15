<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitController extends Controller
{
    public function show() {
        return view('Reg.blade');
    }
}
