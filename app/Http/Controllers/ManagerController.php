<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

class ManagerController extends Controller
{
    public function get_visitors(){
        $visitors = DB::table('visitors')->get();
        return json_encode($visitors);
    }
    public function delete($id){
        DB::table('visitors')->where('id', $id)->delete();
    }
}
