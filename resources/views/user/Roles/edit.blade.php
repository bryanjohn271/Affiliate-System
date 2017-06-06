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
        <a href="/user/roles/">User Roles</a>
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
                        <h5>Edit Roles</h5>
                    </div>
                    <div class="ibox-content">
                               
                                <form role="form" class="form-horizontal" action="{{'/user/roles/'.$roles->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                    <div class="form-group"><label>Role Name</label> <input type="text" name='roles_name' placeholder="Status name" class="form-control" value="{{$roles->roles_name}}"></div>
                                    <div class="form-group"><label>Description</label> <textarea name='description' rows="10" placeholder="Description" class="form-control" >{{$roles->description}}</textarea> </div>    
                                    <div class="form-group"><button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"  ><strong>Submit</strong></button>  </div>          
   
                                </form> 
                              
                    </div>

                        @include('partials.errors')

                </div>
            </div>
            </div>
            </div>



@endsection



 						