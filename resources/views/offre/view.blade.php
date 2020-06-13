@extends('layouts.entreprise')
@section('content')
<div class="jumbotron text-center">
	<div align="right" >
		<a href="{{ route('offre.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>titre: {{ $data->titre }} </h3>
	<h3>infos: {{ $data->description }}</h3>
</div>
@endsection<!-- End Services Section -->