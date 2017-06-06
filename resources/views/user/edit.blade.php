@extends('slider.slides.create')

@section('editid', $slides->id)

@section('editmedia_id', $slides->media_id)

@section('edittitle_name', $slides->title_name)

@section('selectedid', $selectcategory)

@section('selected')
    
     @foreach ($category as $categories)   
        {{$slides->slider_cat_id == $selectcategory  ? 'selected="selected"' : '' }}
     @endforeach
 
@endsection

@section('editdescription', $slides->description)


@section('editMethod')
    {{method_field('PUT')}}
@endsection


 						