@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form">
                {!! Form::model($profile, ['method' => 'PATCH','route' => ['profile.update', $profile->id]]) !!}
                {!! csrf_field() !!}

                <div class="form-group">
                    <label form="title" class="col-md-4 control-label">Title</label>
                    <input id="tile" name="title" type="text" class="form-control" value="{{ $profile->title }}"/>
                </div>

                <div class="form-group">
                    <label form="description" class="col-md-4 control-label">Description</label>
                    <div class="form-group">
		                <textarea id="description" class="form-control" rows="10" name="description" value="{{ $profile->description }}">{{ $profile->description }}
		                </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label form="Image" class="col-md-4 control-label">Image</label>
                    <input type="file" name="image" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


