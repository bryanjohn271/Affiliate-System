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
        <a href="/media/">Media</a>
    </li>
    <li class="active">
        <strong>{{ucfirst(substr(Route::currentRouteName(),6))}}</strong>
    </li>
@endsection


@section('body')
	     
            <div class="col-lg-12">
               <div class="row">
                <div class="col-lg-8 center">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ucfirst(substr(Route::currentRouteName(),6))}} Images</h5>
                    </div>
                    <div class="ibox-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                                <form role="form" class="form-horizontal" method="post"  enctype="multipart/form-data" action="/media/@yield('editid')" >
                                {{csrf_field()}}
                                @section('editMethod')	
                                	@show	
                                    <div class="form-group"><label>Upload Images</label> 
                                    <input type="file" name="mediaimg" id="file">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
									</div>
                                    
                                    <div class="form-group"><label>Category</label>

                                    <select class="form-control m-b" name="country">
                                        @foreach ($country as $countries)	
                                        <option value="{{$countries->id}}"  @yield('selected')>{{$countries->country_name}}</option>
         	                            @endforeach
                                    </select> 
                                    </div>
 
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>                       
                                </form> 
                              
                    </div>

                        @include('layouts.messages.errors')
                       
                </div>
            </div>
            </div>
            </div>


@endsection