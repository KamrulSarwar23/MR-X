<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request){
        $seo=DB::table('seoproperties')->where('pageName','=','contact')->first();
        return view('pages.contact',['seo'=>$seo]);
    }
    
    function contactRequest(Request $request){
        sleep(1);
        DB::table('contacts')->insert($request->input());
        return response()->json(['status' => 'success' , 'message' => 'Request Successful']);
    }
}
