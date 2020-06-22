<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkingHour;
use Illuminate\Support\Facades\Auth;


class WorkingHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(' WorkingHour.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(' WorkingHour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "start_time" => "required:working_hours",

        ]);

        $request->validate([
            "finish_time" => "required:working_hours",
        ]);
        $request->validate([

            "day" => "required:working_hours",
        ]);


        $request->validate([

            "peried" => "required:working_hours",
        ]);

        $request->validate([

            "periodOut" => "required:working_hours",
        ]);
       // $user_id = Auth::user()->id;
      
       WorkingHour::create($request->all());

        return view('home');
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
