@extends('layouts.enseignant')

@section('content')
<div align="right">
	<a href="{{ route('cours.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('cours.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le groupe</label>
		<div class="col-md-8">
			<input type="text" name="grp" value="{{ $data->grp }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le prof</label>
		<div class="col-md-8">
			<input type="text" name="prof" value="{{ $data->prof}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer module</label>
		<div class="col-md-8">
			<input type="text" name="module" value="{{ $data->module }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le chapitre</label>
		<div class="col-md-8">
			<input type="text" name="chapitre" value="{{ $data->chapitre }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer titre</label>
		<div class="col-md-8">
			<input type="text" name="titre" value="{{ $data->titre }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">choisir le n fichier</label>
		<div class="col-md-8">
			<input type="file" name="file" />
			<input type="hidden" name="hidden_file" value="{{ $data->file }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



