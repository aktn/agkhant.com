@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">   	
		<div class="form">
	        {!! Form::model($skill, ['method' => 'PATCH','route' => ['skill.update', $skill->id]]) !!}
	            {!! csrf_field() !!}

	            <div class="form-group">
					<label form="name" class="col-md-4 control-label">Title</label>
					<input id="name" name="name" type="text" class="form-control" value="{{ $skill->name }}"/>		
				</div>

				<div class="form-group">
					<label form="description" class="col-md-4 control-label">Description</label>
		            <div class="form-group">
		                <textarea id="description" class="form-control" rows="10" name="description" value="{{ $skill->description }}">{{ $skill->description }}
		                </textarea>
		            </div> 
	            </div>
	            
	            <div class="form-group">
	                <button type="submit" class="btn btn-primary">Edit</button>
	            </div>
	        {!! Form::close() !!}   
		</div>
	</div>
</div>
@endsection


