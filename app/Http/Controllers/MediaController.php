<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aff_media;
use App\aff_country;
use Image;
use Storage;

class MediaController extends Controller
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
        $media = aff_media::all();    
        return view('media.index',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = aff_country::all();
        return view('media.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new aff_media;
        $this->validate($request,[
                    'country'=>'required',
                   
            ]);
        
        if($request->hasFile('mediaimg')){
         
         $media_name = $request->file('mediaimg');
                //Give a unique and random file name of the image
         $filename = $media_name->getClientOriginalName();
         $filename_2 = '300x300-'.$media_name->getClientOriginalName();
         $filename_3 = '150x150-'.  $media_name->getClientOriginalName();
                //Resize the image and save to the folder images/uploads/products
         Image::make($media_name)->save(public_path('/img/gallery/'. $filename));
         Image::make($media_name)->resize(300, 300)->save(public_path('/img/gallery/'. $filename_2));
         Image::make($media_name)->resize(150, 150)->save(public_path('/img/gallery/'. $filename_3));
                //Store the file name of the image to database
         
         $media->title_name = pathinfo($filename, PATHINFO_FILENAME);
         $media->media_name = $filename;
         $media->media_thumbnail = $filename_3;
         $media->file_size = $media_name->getSize();
         $media->file_type = $media_name->getMimeType();



        }

        $media->country_id = $request->country;
        $media->description = $request->description;
        $media->user_id = "1";
        $media->status_id = "8";

        

    
        $media->save();
        session()->flash('message', 'Successfully Added');

         $media = aff_media::all();    
        return view('media.index',compact('media'));;
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
         $media = aff_media::find($id);
         return view('media.edit', compact('media'));
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
