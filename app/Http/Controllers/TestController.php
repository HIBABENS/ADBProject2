<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Session\Session;
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
    {
        $error = "";
        $employees = "";
        try {
            //$employees = DB::table('employees')->get();
            //DB::statement("CREATE INDEX IndexTest ON EMPLOYEES(EMPLOYEE_NAME)");
            //DB::statement("ANALYZE INDEX IndexTest VALIDATE STRUCTURE");
            //DB::statement('ALTER INDEX EMI.EMIINDEX1  MONITORING USAGE');
            //DB::statement('ALTER INDEX EMI.EMIINDEX1  NOMONITORING USAGE');
            $indexes = DB::table('dba_indexes')->where('owner', '=', 'SYS')
                ->select(
                    'dba_indexes.owner',
                    'dba_indexes.index_name',
                    'dba_indexes.table_owner',
                    'dba_indexes.table_name',
                    'dba_indexes.tablespace_name',
                    'last_analyzed'
                )
                ->get();
            return view('home', ['indexes' => $indexes]);
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            error_log($error);
            return redirect('/')->with('error', $error);
        }
    }

    public function getIndex(Request $request)
    {
        try {
            if ($request->nomObjet == '') {
                $indexes = DB::table('dba_indexes')->where('owner', '=', strtoupper($request->schema))
                        ->select(
                            'owner',
                            'index_name',
                            'table_owner',
                            'table_name',
                            'tablespace_name',
                            'last_analyzed'
                        )
                        ->get();
                    if (!isset($indexes[0])) {
                        return redirect('/')->with('error', "Shema ou objet non trouver");
                    }
            } else {
                if ($request->objet == 'Table') {
                    $indexes = DB::table('dba_indexes')->where([['owner', '=', strtoupper($request->schema)], ['table_name', '=', strtoupper($request->nomObjet)]])
                        ->select(
                            'owner',
                            'index_name',
                            'table_owner',
                            'table_name',
                            'tablespace_name',
                            'last_analyzed'
                        )
                        ->get();
                    if (!isset($indexes[0])) {
                        return redirect('/')->with('error', "Shema ou objet non trouver");
                    }
                    return view('home', ['indexes' => $indexes]);
                } else if ($request->objet == 'Index') {
                    $indexes = DB::table('dba_indexes')->where([['owner', '=', strtoupper($request->schema)], ['index_name', '=', strtoupper($request->nomObjet)]])
                        ->select(
                            'owner',
                            'index_name',
                            'table_owner',
                            'table_name',
                            'tablespace_name',
                            'last_analyzed'
                        )
                        ->get();
                    if (!isset($indexes[0])) {
                        return redirect('/')->with('error', "Shema ou objet non trouver");
                    }
                }
                
            }
            return view('home', ['indexes' => $indexes]);
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            error_log($error);
            return redirect('/')->with('error', $error);
        }
    }
}
