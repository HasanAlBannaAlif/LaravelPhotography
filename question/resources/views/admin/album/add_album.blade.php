@extends('admin.master')

@section('body')
    <div class="container-fluid">
        @if(Session::get('message'))
                <strong class="text-success bg-dark">{{Session::get('message')}}</strong>
        @endif

        <div class="row">

            <div class="col-md-12">
                <h2>Add Album</h2>
                <form action="{{route('new_album')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Album Name</label>
                        <input type="text" name="album_name" class="form-control" placeholder="Enter Album Name">
                    </div>
                    <div class="form-group">
                        <label>Photographer's Name</label>
                        <input type="text" name="photographers_name" class="form-control" placeholder="Enter Photographer's Name">
                    </div>
                    <div class="form-group">
                        <label>Display Image</label>
                        <input type="file" class="form-control-file" name="main_image">
                    </div>
                    <div class="form-group">
                        <label>Album Images</label>
                        <input type="file" class="form-control-file" name="all_images[]" multiple>
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Add Album</button>
                </form>
            </div>
        </div>
    </div>
@endsection














