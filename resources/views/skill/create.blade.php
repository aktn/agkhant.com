<form action="{{ url('skill/store') }}" method="POST">
{!! csrf_field() !!}

Skill Name: <input id="skill" type="text" class="form-control" name="skill"/></br>
Description: <textarea id="description" class="form-control" rows="12" name="description"></textarea></br>

<button type="submit" class="btn btn-primary">Edit</button>

</form>