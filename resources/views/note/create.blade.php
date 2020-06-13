@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('notes') }}" method="Post" >

          {{ csrf_field() }}

              <div class="form-group  @if($errors->get('nom_et_prenom')) has-error @endif" >
              <label for=""> Nom Et Prénom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ old ('nom_et_prenom') }}" >
              @if($errors->get('nom_et_prenom'))
                    @foreach($errors->get('nom_et_prenom') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
              </div>

              <div class="form-group  @if($errors->get('matiere')) has-error @endif">
              <label for="">matiere</label>
              <input type="text" name='matiere' class="form-control" value="{{ old ('matiere') }}">
              @if($errors->get('matiere'))
                    @foreach($errors->get('matiere') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif   
                </div> 
              

                <div class="form-group  @if($errors->get('cc1')) has-error @endif" >
              <label for=""> cc1 </label>
              <input type="text"  name='cc1' class="form-control" value="{{ old ('cc1') }}" >
              @if($errors->get('cc1'))
                    @foreach($errors->get('cc1') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    

                </div>





                
                <div class="form-group  @if($errors->get('cc2')) has-error @endif" >
              <label for=""> cc2 </label>
              <input type="text"  name='cc2' class="form-control" value="{{ old ('cc2') }}" >
              @if($errors->get('cc2'))
                    @foreach($errors->get('cc2') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    

                </div>



                <div class="form-group  @if($errors->get('note_finale')) has-error @endif" >
              <label for=""> Note finale </label>
              <input type="text"  name='note_finale' class="form-control" value="{{ old ('note_finale') }}" >
              @if($errors->get('note_finale'))
                    @foreach($errors->get('note_finale') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>

              <div class="form-group">
             
              <input type="submit"  class="form-control btn btn-primary " value="Enregistrer">
              </div>
          </form>
          </div>
      </div>
  </div>



@endsection