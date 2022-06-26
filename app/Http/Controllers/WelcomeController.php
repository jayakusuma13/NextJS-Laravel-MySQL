<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAll = Data::all();
        $dataValue1 = Data::get('value1');
        $dataName = "jaya";
        return view('welcome',['dataAll'=>$dataAll,'dataName'=>$dataName]);
    }

    public function getJson()
    {
        $dataAll = Data::all();
        return $dataAll->toJson();
        //return view('welcome', ['dataAll'=>$dataAll]);
    }

    public function form()
    {
    return view('form');
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
        $data = new Data;
        $data->value1 = $request->value1;
        $data->value2 = $request->value2;
        $data->save();

        return $data;
        //return "tes";
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
