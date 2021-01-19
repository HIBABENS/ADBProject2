<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Session\Store;


class DetailsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexes = DB::connection('oracle')->table('dba_indexes')->where('owner', '=', 'SYS')
        ->select(
            'dba_indexes.owner',
            'dba_indexes.index_name',
            'dba_indexes.table_owner',
            'dba_indexes.table_name',
            'dba_indexes.tablespace_name',
            'last_analyzed'
        )
        ->get();
        return view('master', ['indexes' => $indexes]);
    }

    public function show($id)
    {
       

        $i = 1;
        $j = 1;
        $details1  = DB::connection('oracle')->table('dba_indexes')
        ->where('INDEX_NAME', '=', $id)
        ->get();

        $indexes[1] = $details1[0]->blevel;
        $indexes[2] = $details1[0]->distinct_keys;
        $indexes[3] = $details1[0]->clustering_factor;
        $indexes[4] = $details1[0]->leaf_blocks;
        $indexes[5] = $details1[0]->avg_leaf_blocks_per_key;
        $indexes[6] = $details1[0]->avg_data_blocks_per_key;
        $indexes[7] = $details1[0]->num_rows;
        $indexes[8] = $details1[0]->sample_size;
        
        $l = count($indexes);

        $stockage[1] = $details1[0]->initial_extent;
        $stockage[2] = $details1[0]->next_extent;
        $stockage[3] = $details1[0]->min_extents;
        $stockage[4] = $details1[0]->max_extents;
        $stockage[5] = $details1[0]->pct_increase;
        $stockage[6] = $details1[0]->pct_threshold;
        $stockage[7] = $details1[0]->pct_free;
            
        $l2 = count($stockage);

        $monitoring = DB::connection('oracle')->table('V$OBJECT_USAGE')
        ->where('INDEX_NAME', '=', $id)
        ->get();
     
      
        return view('details', ['id' => $id,'details1' => $indexes, 'details2' => $stockage, 'l' => $l, 'l2' => $l2,'i'=>$i,'j'=>$j]);
    }
   
    public function setMonitoring(Request $request)
    {
        $input = $request->all();
        
        $details1  = DB::connection('oracle')->table('dba_indexes')->where('INDEX_NAME', '=', $input['id'])
        ->get();

    DB::statement("ALTER INDEX ?  MONITORING USAGE", $input['id']);
      // dd($rest);

      session()->put('Mon', 'Monitored!');
      
      return redirect()
    ->back()
    ->withInput();

    }

    public function unsetMonitoring(Request $request)
    {
        $input = $request->all();
        
        $details1  = DB::connection('oracle')->table('V$OBJECT_USAGE')->where('INDEX_NAME', '=', $input['id'])
        ->get();
  
        DB::statement("ALTER INDEX ?  NOMONITORING USAGE", $input['id']);
        // dd($rest);
  
        session()->put('NoMon', 'Unmonitored!');
        
        return redirect()
      ->back()
      ->withInput();

    }

    public function analize(Request $request)
    {
       $i = 1;
        $input = $request->all();
        $id = $input['id'];
        return view('analyse',['id'=>$id]);
        DB::statement("ANALYZE INDEX ? VALIDATE STRUCTURE", $input['id']);

        $analyse  = DB::connection('oracle')->table('INDEX_STATS')->where('INDEX_NAME', '=', $input['id'])
        ->get();

        return view('analyse', ['analyse' => $analyse,'i'=>$i]);
   
    }

}
