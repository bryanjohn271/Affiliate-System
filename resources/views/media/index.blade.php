@extends('layouts.pages')

@section('title', 'Media')


@section('header-title')
    Media
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <strong>Media</strong>
    </li>
@endsection


@section('body')
            <div class="col-lg-12 ">
                    @include('layouts.messages.messages')
            </div>
            
           
            
                <div class="col-lg-12 animated fadeInRight">
                       <div class="row">
                              <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                         <h2>Media Library</h2>

                         <div class="col-lg-12 ">
                         <a href="{{'/media/create/'}}" class="btn btn-w-m btn-primary pull-left">Add New</a>
                        </div>        

                       <hr>


                        <div class="lightBoxGallery">
                            

                            @foreach ($media as $medias)
                                <!-- <a href="{{asset('/img/gallery/'.$medias->media_name)}}" title="{{$medias->title_name}}}" data-gallery=""    ><img src="{{asset('/img/gallery/'.$medias->media_thumbnail)}}"></a> -->
                                <a href="{{route('media.edit',$medias->id)}}" title="{{$medias->title_name}}" data-hover="tooltip" data-placement="top"  data-toggle="modal" id="modal-edit" data-target="#modal-media" ><img src="{{asset('/img/gallery/'.$medias->media_thumbnail)}}"></a>
                            @endforeach
                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                           

                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>

@endsection



                        