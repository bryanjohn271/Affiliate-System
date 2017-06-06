@extends('layouts.pages')

@section('title', 'Slides')

@section('header-title')
    Slides
@endsection


@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <a href="/slider/slides/">Slides</a>
    </li>
    <li class="active">
        <strong>{{ucfirst(substr(Route::currentRouteName(),7))}}</strong>
    </li>
@endsection


@section('body')
	     
            <div class="col-lg-12">
               <div class="row">
                <div class="col-lg-8 center">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ucfirst(substr(Route::currentRouteName(),7))}} Slides</h5>
                    </div>
                    <div class="ibox-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                                <form role="form" class="form-horizontal" method="post" action="/slider/slides/@yield('editid')" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @section('editMethod')	
                                	@show	
                                    <div class="form-group"><label>Upload Images</label> 
                                    <input type="file" name="SlideImg" id="file">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
									</div>
                                    <div class="form-group"><label>Title</label> <input type="text" name='title_name' placeholder="Title" class="form-control" value="@yield('edittitle_name')"></div>
                                    <div class="form-group"><label>Category</label>

                                    <select class="form-control m-b" name="cagetory"   >
                                        @foreach ($category as $categories)	
                                        <option value="{{$categories->id}}"  @yield('selected')>{{$categories->category_name}}</option>
         	                            @endforeach
                                    </select> 
                                    </div>
                                    <div class="form-group"><label>Description</label> <textarea name='description' rows="10" placeholder="Description" class="form-control" >@yield('editdescription')</textarea> </div>    
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>                       
                                </form> 
                              
                    </div>

                        @include('layouts.messages.errors')
                       
                </div>
            </div>
            </div>
            </div>


@endsection