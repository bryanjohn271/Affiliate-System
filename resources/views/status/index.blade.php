@extends('layouts.pages')

@section('title', 'Status')


@section('header-title')
    Status Category
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <strong>Status Category</strong>
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
                        <h5>Add New Status Category</h5>
                    </div>
                    <div class="ibox-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                                <form role="form" class="form-horizontal" method="post" action="/status">
                                {{csrf_field()}}

                                    <div class="form-group"><label>Status Name</label> <input type="text" name='status_name' placeholder="Status name" class="form-control"></div>
                                    <div class="form-group"><label>Description</label> <textarea name='description' rows="10" placeholder="Description" class="form-control"></textarea> </div>    
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
                        <h5>Status</h5>
   
                    </div>
                    <div class="ibox-content">
                   
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($status as $statused)
                    <tr class="gradeX">
                        <td></td>
                        <td>{{$statused->status_name}}</td>
                        <td>{{$statused->description}}</td>
                        <td>{{$statused->updated_at->diffForhumans()}}</td>
                        <td><a href="{{'/status/'.$statused->id.'/edit'}}" class="btn btn-w-s btn-link">Edit</a>|
                        <form class="form-group pull-right" method="post" action="{{'/status/'.$statused->id}}" >
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
                        <th>Status</th>
                        <th>Description</th>
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



 						