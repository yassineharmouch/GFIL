@extends('layouts.enseignant')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('cours.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<h3>groupe : {{ $data->grp }} </h3>
	<h3>prof : {{ $data->prof }}</h3>
	<h3>module : {{ $data->module }} </h3>
	<h3>chapitre: {{ $data->chapitre}}</h3>
	<h3>titre: {{ $data->titre}}</h3>
	<h3>description: {{ $data->description}}</h3>
	<p>
        <iframe src="{{ url('storage/'.$data->file) }}" style="width: 600px; height: 500px; " frameborder="0"></iframe>
    </p>
</div>
@endsection
