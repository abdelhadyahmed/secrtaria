<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;
use Carbon\Carbon;

class ManagerController extends Controller
{
    public function get_visitors(){
        $visitors = DB::table('visitors')->orderBy('created_at', 'desc')->get();
        foreach($visitors as $visitor){
            $visitor->created_at = (new Carbon($visitor->created_at))->format('h:ia F d, Y ');
        }
        return json_encode($visitors);
    }
    public function delete($id){
        DB::table('visitors')->where('id', $id)->delete();
    }
    public function command_to_secrtary(Request $request){
        $request->validate([
            'name' => 'required',
            'command' => 'required',
        ]);
        DB::table('command')->insert(
            [
                'name' => $request->name,
                'command' => $request->command,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        );
    }
}
