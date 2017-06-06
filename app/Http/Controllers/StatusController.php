<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aff_status;

class StatusController extends Controller
{


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $status = aff_status::all();    
        return view('status.index', compact('status'));
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
        $status = new aff_status;
        $this->validate($request,[
                    'status_name'=>'required|unique:aff_statuses',                     
            ]);
        $status->status_name = $request->status_name;
        $status->description = $request->description;
        $status->user_id = "1";
        $status->save();

        session()->flash('message', 'Successfully Added');

        $status = aff_status::all();    
        return view('status.index', compact('status'));

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
        $status = aff_status::find($id);
        return view('status.edit', compact('status'));
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
    
        $status = aff_status::find($id);

        $this->validate($request,[
                    'status_name'=>'required',
                                       
            ]);
        $status->status_name = $request->status_name;
        $status->description = $request->description;
        $status->user_id = "1";
       
        $status->save();

        session()->flash('message', 'Successfully Updated');

        $status = aff_status::all();
        return view('status.index', compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = aff_status::find($id);
        $status->delete();

        session()->flash('message', 'Successfully Deleted');

        $status = aff_status::all();
        return view('status.index', compact('status'));
    }
}
