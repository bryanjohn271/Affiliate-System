@extends('layouts.pages')

@section('title', 'Country')


@section('header-title')
    Country
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <a href="/country">Country</a>
    </li>
    <li class="active">
        <strong>EDIT</strong>
    </li>
@endsection



@section('body')
	        <div class="col-lg-12 center">
               <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit Country</h5>
                    </div>
                    <div class="ibox-content">
                               
                                <form role="form" class="form-horizontal" action="{{'/country/'.$country->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                    <div class="form-group"><label>Country</label> <input type="text" name='country_name' placeholder="Enter Country" class="form-control" value="{{$country->country_name}}"></div>
                                    <div class="form-group"><label>Location</label> <input type="text" name='locade_code' placeholder="Enter Loction Code" class="form-control" value="{{$country->locade_code}}"></div>    
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>                       
                                </form> 
                              
                    </div>

                        @include('layouts.messages.errors')

                </div>
            </div>
            </div>
            </div>



@endsection



 						