<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function getData(Request $request){
        $data="This is data";
        return view('index',['key'=>$data]);
    }
    public function stations(){
        $stations=DB::table('stations')->get();
        return view('index',['stations'=>$stations]);
    }
}
