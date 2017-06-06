@extends('layouts.pages')

@section('title', 'Slider')


@section('header-title')
    Slider
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <strong>Slider</strong>
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
                   <!--  <div class="ibox-title">
                
                    </div> -->
                    <div class="ibox-content">
                   
                    <div class="col-lg-12 ">
                    <a href="{{'/slider/slides/create/'}}" class="btn btn-w-m btn-primary pull-left">Add New</a>
                    </div>    

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($slides as $slideshowed)
                    <tr class="gradeX">
                        <td></td>
                        <td><img src="{{$slideshowed->path}}" class="pull-left" style="width:60%;"></td>
                        <td>{{$slideshowed->title_name}}</td>
                        <td>{{$slideshowed->category_name}}</td>
                        <td>{{$slideshowed->created_at->diffForhumans()}}</td>
                        <td><a href="{{'/slider/slides/'.$slideshowed->id.'/edit'}}" class="btn btn-w-s btn-link">Edit</a>|
                        <form class="form-group pull-right" method="post" action="{{'/slider/slides/'.$slideshowed->id}}" >
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
                        <th></th>
                        <th>Title</th>
                        <th>Category</th>
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



                        