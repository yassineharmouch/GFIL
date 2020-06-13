@extends('layouts.etudiant')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('cvs.index') }}" class="btn btn-default">Back</a>
</div>

<form method="POST"  action="{{ route('cvs.store') }}" enctype="multipart/form-data">
	
	@csrf
	{{ csrf_field() }}
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer</label>
		<div class="col-md-8">
			<input type="text" name="grp" class="form-control input-lg"  placeholder="groupe" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le nom</label>
		<div class="col-md-8">
			<input type="text" name="nom" class="form-control input-lg"  placeholder="votre nom"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le prenom</label>
		<div class="col-md-8">
			<input type="text" name="prenom" class="form-control input-lg"  placeholder="votre prenom" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer l'address</label>
		<div class="col-md-8">
			<input type="text" name="address" class="form-control input-lg"  placeholder="votre addrsse"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter la filiere</label>
		<div class="col-md-8">
			<input type="text" name="filiere" class="form-control input-lg"  placeholder="votre filiere"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">votre niveau scolaire</label>
		<div class="col-md-8">
			<input type="text" name="niveau" class="form-control input-lg"  placeholder="otre niveau scolaire"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter description</label>
		<div class="col-md-8">
			<input type="text" name="description" class="form-control input-lg"  placeholder="description"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">choisir le fichier</label>
		<div class="col-md-8">
			<input type="file" name="file" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="ajouter" class="btn btn-primary input-lg" value="Ajouter" />
	</div>

</form>

@endsection



