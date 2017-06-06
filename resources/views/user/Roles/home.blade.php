@extends('bo-dashboard.pages')

@section('title', 'User Roles')


@section('header-title')
    User Roles
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <strong>User Roles</strong>
    </li>
@endsection


@section('body')
            <div class="col-lg-12 ">
                    @include('partials.messages')
            </div>
            
            <div class="col-lg-4">
               <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add New Roles</h5>
                    </div>
                    <div class="ibox-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                                <form role="form" class="form-horizontal" method="post" action="/user/roles">
                                {{csrf_field()}}

                                    <div class="form-group"><label>Roles Name</label> <input type="text" name='roles_name' placeholder="Role name" class="form-control"></div>
                                    <div class="form-group"><label>Description</label> <textarea name='description' rows="10" placeholder="Description" class="form-control"></textarea> </div>    
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>                       
                                </form> 
                              
                    </div>

                        @include('partials.errors')
                       
                </div>
            </div>
            </div>
            </div>

                <div class="col-lg-8 animated fadeInRight">
                       <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>User Roles</h5>
   
                    </div>
                    <div class="ibox-content">
                   
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Role(s)</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $rolesed)
                    <tr class="gradeX">
                        <td></td>
                        <td>{{$rolesed->roles_name}}</td>
                        <td>{{$rolesed->description}}</td>
                        <td>{{$rolesed->created_at->diffForhumans()}}</td>
                        <td><a href="{{'/user/roles/'.$rolesed->id.'/edit'}}" class="btn btn-w-s btn-link">Edit</a>|
                        <form class="form-group pull-right" method="post" action="{{'/user/roles/'.$rolesed->id}}" >
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
                        <th>Role(s)</th>
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



                        