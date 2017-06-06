<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aff_slide;
use App\aff_slider_category;


class SlideController extends Controller
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
         //$slides = aff_slide::all();
        //$slides = aff_slide::join('aff_slider_categories','aff_slides.slider_categories_id', '=','aff_slider_categories.id')->orderBy('category_name')->get();
        $slides = aff_slide::select('aff_slides.id','aff_slides.title_name','aff_slides.path','aff_slider_categories.category_name','aff_slides.created_at')->join('aff_slider_categories','aff_slides.slider_categories_id', '=','aff_slider_categories.id')->orderBy('category_name')->get();
    
        return view('slider.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $category = aff_slider_category::all();
        //$selectcategory = aff_slider::first()->slider_cat_id;
        return view('slider.slides.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slides = new aff_slide;
        $this->validate($request,[
                    'title_name'=>'required|unique:aff_slides',
                    // 'media_id'=>'required',
                    'cagetory'=>'required',
                   
            ]);
        
        if($request->hasFile('SlideImg')){
            $SlideImg = $request->file('SlideImg');
        //Give a unique and random file name of the image
        $filename = time() . '.' . $SlideImg->getClientOriginalExtension();
        //Resize the image and save to the folder images/uploads/products
        Image::make($SlideImg)->resize(300, 300)->save(public_path('/img/gallery/'. $filename));
        //Store the file name of the image to database
         $slides->SlideImg = $filename;
        }    


        $slides->media_id = "1";
        $slides->path = "/img/gallery/720X90.jpg";
        $slides->title_name = $request->title_name;
        $slides->slider_categories_id = $request->cagetory;
        $slides->description = $request->description;
        $slides->user_id = "1";
        $slides->status_id = "8";
        
        $slides->save();

        session()->flash('message', 'Successfully Added');

        //$slides = aff_slide::all();
        $slides = aff_slide::select('aff_slides.id','aff_slides.title_name','aff_slides.path','aff_slider_categories.category_name','aff_slides.created_at')->join('aff_slider_categories','aff_slides.slider_categories_id', '=','aff_slider_categories.id')->orderBy('category_name')->get();
       
        return view('slider.slides.index', compact('slides'));
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
        $slides = aff_slide::find($id);
        $category = aff_slider_category::all();
        $selectcategory = aff_slide::first()->slider_categories_id;
        

        return view('slider.slides.edit', compact('slides','category','selectcategory'));
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
       $slides = aff_slide::find($id);
       $this->validate($request,[
                   'title_name'=>'required',
                    // 'media_id'=>'required',
                    'cagetory'=>'required',
                   
            ]);
        $slides->media_id = "1";
        $slides->path = "/img/gallery/720X90.jpg";
        $slides->title_name = $request->title_name;
        $slides->slider_categories_id = $request->cagetory;
        $slides->description = $request->description;
        $slides->user_id = "1";
        $slides->status_id = "8";
        
        $slides->save();

        session()->flash('message', 'Successfully Updated');

        //$slides = aff_slide::all();
        $slides = aff_slide::select('aff_slides.id','aff_slides.title_name','aff_slides.path','aff_slider_categories.category_name','aff_slides.created_at')->join('aff_slider_categories','aff_slides.slider_categories_id', '=','aff_slider_categories.id')->orderBy('category_name')->get();
        
        return view('slider.slides.index', compact('slides'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slides = aff_slide::find($id);
        $slides->delete();

        session()->flash('message', 'Successfully Deleted');

        //$slides = aff_slide::all();
        $slides = aff_slide::select('aff_slides.id','aff_slides.title_name','aff_slides.path','aff_slider_categories.category_name','aff_slides.created_at')->join('aff_slider_categories','aff_slides.slider_categories_id', '=','aff_slider_categories.id')->orderBy('category_name')->get();
       
        return view('slider.slides.index', compact('slides'));
    }
}
