<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

class ManagerController extends Controller
{
    public function index(){
        $visitors = DB::table('visitors')->get();
        return json_encode($visitors);
    }
}
