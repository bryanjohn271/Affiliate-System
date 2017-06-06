@extends('layouts.pages')
@section('title', 'Status')
@section('header-title')
    Status
@endsection
@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <a href="/status">Status</a>
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
                        <h5>Edit Status</h5>
                    </div>
                    <div class="ibox-content">
                               
                                <form role="form" class="form-horizontal" action="{{'/status/'.$status->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                    <div class="form-group"><label>Status Name</label> <input type="text" name='status_name' placeholder="Status name" class="form-control" value="{{$status->status_name}}"></div>
                                    <div class="form-group"><label>Description</label> <textarea name='description' rows="10" placeholder="Description" class="form-control" >{{$status->description}}</textarea> </div>    
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>          
   
                                </form> 
                              
                    </div>

                        @include('layouts.messages.errors')

                </div>
            </div>
            </div>
            </div>



@endsection



 						