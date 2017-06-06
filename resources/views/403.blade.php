@extends('layouts.master')

@section('title', 'Access denied')

@section('accessdenied')
     <div class="middle-box text-center animated fadeInDown">
        <h2>Access Denied</h2>
        <h3 class="font-bold">You do not permision for this Pages</h3>

        <div class="error-desc">
            The server encountered something unexpected that didn't allow it to complete the request. We apologize.<br/>
            You can go back to main page: <br/><a href="{{ URL::previous() }}" class="btn btn-primary m-t">Go Back</a>
        </div>
    </div>

@endsection
