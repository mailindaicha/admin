<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\ModelFestival;
use Illuminate\Http\Request;
use DB;

class Festival extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $festivals = ModelFestival::all()->toArray;
        return view('input-festival',compact('festivals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input-festival');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $data = new ModelFestival();
            $data->title=$request->title;
            $image = $request->file('gambar');
            $filename  = date('m-d-Y_hia').'.'.$image->getClientOriginalExtension();
            $image->move('upload',$filename);

            $data->image = $filename;
            $data->content = $request->content;

         if($data->save()) return redirect('/input')->with('success', 'Data berhasil diinput');
        else return redirect('/input')->with('failed', 'Data gagal diinput');
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

    
    function allfestival(){
        $data = DB::table('model_festivals')->get();
        return view('index', compact('data')); 
    }
     
}

