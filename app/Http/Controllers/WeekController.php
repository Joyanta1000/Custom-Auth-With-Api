<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('week.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $daysOfWeek = array(0, 1, 2, 3, 4, 5, 6);
        // $days = $request->day;
        // $daysAux = array();
        // foreach ($days as $k => $v) {
        //     $key = array_search($v, $daysOfWeek);
            
        //     if ($key !== FALSE) {
                
        //         $daysAux[$key] = $v;

        //     }
        // }
        // print_r($daysAux);
        // echo '<pre/>';
        // ksort($daysAux);
        // $days = $daysAux;
        // echo '<pre/>';
        // print_r($days);
        // exit;

        
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
