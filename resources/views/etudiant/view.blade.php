@extends('layouts.enseignant')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('etudiant.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>Nom : {{ $data->nom }} </h3>
	<h3>Prenom : {{ $data->prenom }}</h3>
	<h3>CNE : {{ $data->cne }} </h3>
	<h3>Grp: {{ $data->grp}}</h3>
	<h3>Note: {{ $data->note}}</h3>
</div>
@endsection
