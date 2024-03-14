<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request){
        $seo=DB::table('seoproperties')->where('pageName','=','projects')->first();
        return view('pages.projects',['seo'=>$seo]);
    }
    
    function projectsData(Request $request){
        sleep(1);
        return DB::table('projects')->get();
    }
}
