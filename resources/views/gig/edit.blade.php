@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">   	
		<div class="form">
			
			{!! Form::model($gig, ['method' => 'PATCH','route' => ['gig.update', $gig->id]]) !!}
			{!! csrf_field() !!}
				<div class="form-group">
					<label form="title" class="col-md-4 control-label">Gig Title</label>
					<input id="title" type="text" class="form-control" name="title" value="{{ $gig->title }}"/></br>		
				</div>

				<div class="form-group">
					<label form="description" class="col-md-4 control-label">Description</label>
		            <div class="form-group">
		                <textarea id="description" class="form-control" rows="12" name="description" value="{{ $gig->description }}">{{ $gig->description }}</textarea>
		            </div> 
		        </div>

		        <div class="form-group">
					<label form="Image" class="col-md-4 control-label">Image</label>
		            <input type="file" name="image" />
		        </div>	
				
				<div class="form-group">
		            <button type="submit" class="btn btn-primary">Add</button>
		        </div>
			{!! Form::close() !!}

		</div>
	</div>
</div>
@endsection


