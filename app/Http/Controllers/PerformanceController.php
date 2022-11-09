<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;


class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    : JsonResponse {
            
        $start = microtime(true);
        $data = [];
      
         for ($i = 0; $i <  $request->number; $i++){
        $data[] = [
            'unique_code' => Str::random(7),
        ];
    
        }
        foreach(array_chunk($data,1000) as $chunk ) {
            Code::insert($chunk);
        }

        $time_ms = microtime(true) - $start;

        $time_1_decimal = round($time_ms, 1);
     
        return response()->json($time_1_decimal." seconds");


        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
