<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aff_country;

class CountryController extends Controller
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

        $country = aff_country::all();
        return view('country.index', compact('country'));
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
        $country = new aff_country;
        $this->validate($request,[
                    'country_name'=>'required|unique:aff_countries',
                    'locade_code'=>'required',                    
            ]);
        $country->country_name = $request->country_name;
        $country->locade_code = $request->locade_code;
        $country->user_id = "1";
        $country->save();

        session()->flash('message', 'Successfully Added');

        $country = aff_country::all();
        return view('country.index', compact('country'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* $country = aff_country::find($id);
        return view('country.view', compact('country'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = aff_country::find($id);
        return view('country.edit', compact('country'));
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
        $country = aff_country::find($id);
        $this->validate($request,[
                    'country_name'=>'required',
                    'locade_code'=>'required',                    
            ]);
        $country->country_name = $request->country_name;
        $country->locade_code = $request->locade_code;
        $country->user_id = "1";
        $country->save();

        session()->flash('message', 'Successfully Updated');


        $country = aff_country::all();
        return view('country.index', compact('country'));
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = aff_country::find($id);
        $country->delete();

        session()->flash('message', 'Successfully Deleted');

        $country = aff_country::all();
        return view('country.index', compact('country'));


    }
}
