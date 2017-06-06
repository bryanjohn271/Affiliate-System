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
        <strong>Country</strong>
    </li>
@endsection



@section('body')
            <div class="col-lg-12 ">
                    @include('layouts.messages.messages')
            </div>
            
	        <div class="col-lg-4">
               <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add New Country</h5>
                    </div>
                    <div class="ibox-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                                <form role="form" class="form-horizontal" method="post" action="/country">
                                {{csrf_field()}}

                                    <div class="form-group"><label>Country</label> <input type="text" name='country_name' placeholder="Enter Country" class="form-control"></div>
                                    <div class="form-group"><label>Location</label> <input type="text" name='locade_code' placeholder="Enter Loction Code" class="form-control"></div>    
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>                       
                                </form> 
                              
                    </div>

                        @include('layouts.messages.errors')
                       
                </div>
            </div>
            </div>
            </div>

	            <div class="col-lg-8 animated fadeInRight">
                       <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Country</h5>
   
                    </div>
                    <div class="ibox-content">
                   
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Country</th>
                        <th>Location Code</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($country as $countries)
                    <tr class="gradeX">
                        <td></td>
                        <td>{{$countries->country_name}}</td>
                        <td>{{$countries->locade_code}}</td>
                        <td>{{$countries->created_at->diffForhumans()}}</td>
                        <td><a href="{{'/country/'.$countries->id.'/edit'}}" class="btn btn-w-s btn-link">Edit</a>|
                        <form class="form-group pull-right" method="post" action="{{'/country/'.$countries->id}}" >
                             {{csrf_field()}}
                             {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-w-s btn-link">Delete</button>
                        </form>
                        </td>
                    </tr>

                               
                    @endforeach 
                   
                   
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>Country</th>
                        <th>Location Code</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            </div>

@endsection



 						