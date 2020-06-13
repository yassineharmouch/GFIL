@extends('layouts.etudiant')

@section('content')
<section id="annonces" class="services">
	<div class="container">
  
<div align="right">
	<a href="{{ route('annonce.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
  <div class="row" >

			@foreach($annonces as $annonce)
	        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" >
			<div class="icon-box" data-aos="fade-up" >
			<img src="{{ URL::to('/') }}/images/{{ $annonce->image }}" alt="Bootstrap" class="img-thumbnail">
			<div class="caption">
				<h4 class="title">{{ $annonce->titre }}</h4>
				<p>...</p>
				<form action="{{ route('annonce.destroy', $annonce->id) }}" method="post">
						
					
				<a  href="{{ route('annonce.show', $annonce->id) }}" class="btn btn-primary" role="button">show</a>
				
				<a  href="{{ route('annonce.edit', $annonce->id) }}" class="btn btn-warning" role="button">editer</a>
				@csrf
				@method('DELETE')
				
						<button type="submit" class="btn btn-danger" role="button">sup</button>
				</form>
				</p>
			</div>
			</div>
	</div>
  @endforeach
</div>
	</div>
@endsection

