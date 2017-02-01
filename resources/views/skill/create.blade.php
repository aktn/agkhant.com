@extends('layouts.app')

@section('content')
<div class="row">   	
	<div class="form">
		<form action="{{ url('skill/store') }}" class="form" method="POST">
		{!! csrf_field() !!}
			<div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
				<label form="title" class="col-md-4 control-label">Skill</label>
				<input id="skill" type="text" class="form-control" name="skill"/></br>		
			</div>

			<div class="form-group{{ $errors->has('description') ? 'has-error' : '' }}">
				<label form="description" class="col-md-4 control-label">Description</label>
	            <div class="form-group">
	                <textarea id="description" class="form-control" rows="12" name="description"></textarea>
	            </div> 
	        </div>
			
			<div class="form-group">
	            <button type="submit" class="btn btn-primary">Add</button>
	        </div>
		</form>
	</div>
</div>
@endsection


