@extends('layouts.app')

@section('content')

  
  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('notes/'.$note->id) }}" method="post" >
          <input type="hidden" name="_method" value="PUT">
         
            

            
         
          {{ csrf_field() }}

              <div class="form-group">
              <label for="">Nom Et Prenom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ $note->nom_et_prenom }}">
              </div>

              <div class="form-group">
              <label > Matiére</label>
              <input  name='matiere ' class="form-control" value="{{ $note->matiere }}" >
              </div>

              <div class="form-group">
              <label for=""> cc1 </label>
              <input type="text"  name='semestre' class="form-control" value="{{ $note->cc1 }}">
              </div>

              
              <div class="form-group">
              <label for=""> cc2 </label>
              <input type="text"  name='semestre' class="form-control" value="{{ $note->cc2 }}">
              </div>

              <div class="form-group">
              <label for=""> Note Final</label>
              <input type="text"  name='note_finale' class="form-control" value="{{ $note->note_finale }}">
              </div>




                <div class="form-group">
              <input type="submit"  class="form-control btn btn-danger " value="Modifier">
              </div>
          </form>
          </div>
      </div>
    </div>


@endsection