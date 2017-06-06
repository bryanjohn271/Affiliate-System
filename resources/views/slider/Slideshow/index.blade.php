@extends('layouts.pages')

@section('title', 'SlideShow')


@section('header-title')
    SlideShow
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <strong>SlideShow</strong>
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
                        <h5>Add New SlideShow</h5>
                    </div>
                    <div class="ibox-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                                <form role="form" class="form-horizontal" method="post" action="/slider/slideshow">
                                {{csrf_field()}}

                                    <div class="form-group"><label>Name</label> <input type="text" name='category_name' placeholder="Name" class="form-control"></div>
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
                        <h5>SlideShow</h5>
   
                    </div>
                    <div class="ibox-content">
                   
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($slideshow as $slideshowed)
                    <tr class="gradeX">
                        <td></td>
                        <td>{{$slideshowed->category_name}}</td>
                        <td>{{$slideshowed->description}}</td>
                        <td>{{$slideshowed->created_at->diffForhumans()}}</td>
                        <td><a href="{{'/slider/slideshow/'.$slideshowed->id.'/edit'}}" class="btn btn-w-s btn-link">Edit</a>|
                        <form class="form-group pull-right" method="post" action="{{'/slider/slideshow/'.$slideshowed->id}}" >
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
                        <th>Name</th>
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



                        