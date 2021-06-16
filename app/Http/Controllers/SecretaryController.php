<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SecretaryController extends Controller
{
    public function index(){
        return view('Secretary');
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'reason' => 'required',
            'notes' => 'nullable',
        ]);
        DB::table('visitors')->insert(
            [
                'name' => $request->name,
                'reason' => $request->reason,
                'notes' => $request->notes
            ]
        );
        return back();
    }
}
