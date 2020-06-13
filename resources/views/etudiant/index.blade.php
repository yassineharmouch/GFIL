@extends('layouts.enseignant')

@section('content')

<div align="right">
	<a href="{{ route('etudiant.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="13%">CNE</th>
		<th width="13%">Nom</th>
		<th width="13%">Prenom</th>
		<th width="13%">Groupe</th>
		<th width="13%">Note</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->cne }}</td>
			<td>{{ $row->nom }}</td>
			<td>{{ $row->prenom }}</td>
			<td>{{ $row->grp }}</td>
			<td>{{ $row->note }}</td>
			<td>
				
				<form action="{{ route('etudiant.destroy', $row->id) }}" method="post">
					<a href="{{ route('etudiant.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('etudiant.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection