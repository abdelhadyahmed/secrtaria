<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function index(){
        $visitors = DB::table('visitors')->get();
        return view('manager')->with(compact('visitors'));
    }
}
