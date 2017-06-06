<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aff_slider_category;

class SlideshowController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
      

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideshow = aff_slider_category::all();
        return view('slider.slideshow.index', compact('slideshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.slideshow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slideshow = new aff_slider_category;
        $this->validate($request,[
                    'category_name'=>'required|unique:aff_slider_categories',
                                       
            ]);
        $slideshow->category_name = $request->category_name;
        $slideshow->slug = $request->category_name;
        $slideshow->description = $request->description;
        $slideshow->user_id = "1";
        $slideshow->save();

        session()->flash('message', 'Successfully Added');

        $slideshow = aff_slider_category::all();
        return view('slider.slideshow.index', compact('slideshow'));
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
        $slideshow = aff_slider_category::find($id);
        return view('slider.slideshow.edit', compact('slideshow'));
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
        $slideshow = aff_slider_category::find($id);

         $this->validate($request,[
                    'category_name'=>'required',
                                       
            ]);
        $slideshow->category_name = $request->category_name;
        $slideshow->slug = $request->category_name;
        $slideshow->description = $request->description;
        $slideshow->user_id = "1";
        $slideshow->save();

        session()->flash('message', 'Successfully Updated');

         $slideshow = aff_slider_category::all();
        return view('slider.slideshow.index', compact('slideshow'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slideshow = aff_slider_category::find($id);
        $slideshow->delete();

        session()->flash('message', 'Successfully Deleted');

        $slideshow = aff_slider_category::all();
        return view('slider.slideshow.index', compact('slideshow'));
    }
}
