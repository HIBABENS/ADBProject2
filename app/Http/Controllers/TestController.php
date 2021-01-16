<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $error="";
        $employees=""; 
        try {
            //$employees = DB::table('employees')->get();
            //DB::statement("CREATE INDEX IndexTest ON EMPLOYEES(EMPLOYEE_NAME)");
            //DB::statement("ANALYZE INDEX IndexTest VALIDATE STRUCTURE");
            //DB::statement('ALTER INDEX EMI.EMIINDEX1  MONITORING USAGE');
            //DB::statement('ALTER INDEX EMI.EMIINDEX1  NOMONITORING USAGE');
            $indexes=DB::table('dba_indexes')->where('owner','=','SYS')
            ->join('dba_ind_columns','dba_indexes.index_name','=','dba_ind_columns.index_name')
            ->select('dba_indexes.owner',
            'dba_indexes.index_name',
            'dba_indexes.table_owner',
            'dba_indexes.table_name',
            'dba_indexes.tablespace_name',
            'last_analyzed')
            ->get();
            return view('home', ["indexes" => $indexes]);
        } catch (Exception $ex) {
            $error=$ex->getMessage();
            error_log($error);
            return redirect('/home')->with('error', $error);
        }
    }

    
}
