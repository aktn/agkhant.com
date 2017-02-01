@extends('layouts.app')

@section('content')
<div class="row">   	
	<div class="form">
        <form action="{{ url('skill/edit') }}" class="form" method="POST">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
				<label form="title" class="col-md-4 control-label">Title</label>
				<input id="title" name="title" type="text" class="form-control" value=""/>		
			</div>

			<div class="form-group{{ $errors->has('description') ? 'has-error' : '' }}">
				<label form="description" class="col-md-4 control-label">Description</label>
	            <div class="form-group">
	                <textarea id="description" class="form-control" rows="10" name="description" value="">{{  }}
	                </textarea>
	            </div> 
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>	   
	</div>
</div>
@endsection


