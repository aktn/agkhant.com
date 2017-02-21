@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">



                <div class="form-group">
                    <label form="title" class="col-md-4 control-label">Gig Title</label>
                    {{ $profile->title }}</br>
                </div>

                <div class="form-group">
                    <label form="description" class="col-md-4 control-label">Description</label>
                    <div class="form-group">
                        {{ $profile->description }}
                    </div>
                </div>




        </div>
    </div>
@endsection


