@extends('layouts.etudiant')

@section('content')

<div align="right">
	<a href="{{ route('cvs.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="">No</th>
		<th width="">nom</th>
		<th width="">prenom</th>
		<th width="">address</th>
		<th width="">filiere</th>
		<th width="">niveau scl.</th>
		<th width="">description</th>
		<th>actions</th>
	</tr>
	@foreach($data as $key=>$data)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $data->nom}}</td>
			<td>{{ $data->prenom}}</td>
			<td>{{ $data->address}}</td>
			<td>{{ $data->filiere }}</td>
			<td>{{ $data->niveau}}</td>
			<td>{{ $data->description }}</td>
			<td>
				
				<form action="{{ route('cvs.destroy', $data->id) }}" method="post">
					<a href="{{ route('cvs.show', $data->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('cvs.edit', $data->id) }}" class="btn btn-warning">Edit</a>
					<a href="/cvs/download/{{ $data->file }}">Download</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>

@endsection