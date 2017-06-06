@extends('layouts.pages')

@section('title', 'User')


@section('header-title')
    User
@endsection

@section('breadcrumb')
   <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <strong>User</strong>
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
                    <a href="/user/create" class="btn btn-w-m btn-primary pull-left">Add New</a>
                    </div>    

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Account Type</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                 @foreach ($user as $users)

                    <tr class="gradeX">
                        <td></td>
                        <td>{{$users->first_name}} {{$users->last_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->status_name}}</td>
                        <td>{{$users->country_name}}</td>
                        <td>{{$users->status_id}}</td>
                        <td>Edit | Delete </td>
                    </tr>
    
                   
                 @endforeach    

                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Account Type</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            </div>

@endsection



                        