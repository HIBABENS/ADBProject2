<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function index(){
      //  DB::table('dept')->get();
        //return view('Dashbord.home');
        
       // $activites = activite::orderBy('id', 'DESC')->get();
      /*  $connect = DB::connection();
        $query = 'select user from dual';
        $stid = oci_parse($connect, $query);
        $r = oci_execute($stid);
        return view('Dashbord.home', compact('r'));*/
        return view('test');
    }
}
