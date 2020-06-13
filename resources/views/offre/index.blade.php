@extends('layouts.etudiant')

@section('content')
<section id="offres" class="services">
	<div class="container">
  
<div align="right">
	<a href="{{ route('offre.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
  <div class="row" >

			@foreach($offres as $offre)
	        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" >
			<div class="icon-box" data-aos="fade-up" >
			<img src="{{ URL::to('/') }}/images/{{ $offre->image }}" alt="Bootstrap" class="img-thumbnail">
			<div class="caption">
				<h4 class="title">{{ $offre->titre }}</h4>
				<p>...</p>
				<form action="{{ route('offre.destroy', $offre->id) }}" method="post">
						
					
				<a  href="{{ route('offre.show', $offre->id) }}" class="btn btn-primary" role="button"><i class="icon_plus_alt2"></i></a>
				
				<a  href="{{ route('offre.edit', $offre->id) }}" class="btn btn-warning" role="button"><i class="icon_check_alt2"></i></a>
				@csrf
				@method('DELETE')
				
						<button type="submit" class="btn btn-danger" role="button"><i class="icon_close_alt2"></i></button>
						<a href="{{ route('cvs.create') }}" class="btn btn-default"  title="Bootstrap 3 themes generator">postuler</a>
							 
				</form>
				</p>
			</div>
			</div>
	</div>
  @endforeach
</div>
	</div>
@endsection

