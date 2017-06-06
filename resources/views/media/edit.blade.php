@extends('layouts.pages')

@section('body')

					 <div class="modal inmodal fade" id="modal-media" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Attachment Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                            <div class="col-lg-6">
                                                <img src="{{asset('/img/gallery/'.$media->media_name)}}" width="300px" height="300px">
                                            </div>
                                            <div class="col-lg-6">
                                            <p><strong>Filename:</strong> {{ucfirst($media->title_name)}}</p>
                                            <p><strong>File Type:</strong> {{$media->file_type}}</p>
                                            <hr>
                                            
                                            <form role="form" class="form-horizontal" method="post" action="/media/{{$media->id}}">
                                                 {{csrf_field()}}

                                                <div class="form-group"><label>Url:</label> <input type="text" name='path' placeholder="path" class="form-control" value="{{asset('/img/gallery/'.$media->media_name)}}" disabled></div>
                                                <div class="form-group"><label>Title</label> <input type="text" name='title_name' placeholder="Enter Title" class="form-control" value="{{$media->title_name}}"></div>    
                                                <div class="form-group"><label>Caption</label> <textarea name='description' rows="5" placeholder="Caption" class="form-control" >{{$media->caption}}</textarea></div>    
                                                <div class="form-group"><label>Alt text</label> <input type="text" name='alt_text' placeholder="Enter Title" class="form-control" value="{{$media->alt_text}}"></div>    
                                                <div class="form-group"><label>Description</label> <textarea name='description' rows="5" placeholder="Description" class="form-control" >{{$media->description}}</textarea></div>    
                                                <div class="form-group"><button class="btn btn-sm btn-info pull-left m-t-n-xs" type="submit"  ><strong>Update</strong></button>                   
                                                <button class="btn btn-sm btn-warning pull-left m-t-n-xs" type="submit"  ><strong>Delete</strong></button>  </div>                       
                                            </form> 


                         
                                            </div>                 
                                            </div>    


                                        </div>

                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection
 						