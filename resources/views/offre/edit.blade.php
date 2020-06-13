@extends('layouts.entreprise')

@section('content')
<div align="right">
	<a href="{{ route('offre.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('offre.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">changer le titre</label>
		<div class="col-md-8">
			<input type="text" name="titre" value="{{ $data->titre }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entre description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



