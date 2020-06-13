@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('emplois') }}" method="Post" >

          {{ csrf_field() }}

          

                               <label for="jour">jour:</label>

                 <select name="jour" id="jour">
                   <option value="lundi">lundi</option>
                   <option value="mardi">mardi</option>
                   <option value="mercredi">Mercredi</option>
                   <option value="jeudi">jeudi</option>
                   <option value="vendredi">vendredi</option>
                   <option value="samedi">samdei</option>
                 </select>
             
             
                <div class="form-group  @if($errors->get('premiere_sceance')) has-error @endif" >
              <label for="">8h30->10h15( module : salle) </label>
              <input type="text"  name='premiere_sceance' class="form-control" value="{{ old ('premiere_sceance') }}" >
              @if($errors->get('premiere_sceance'))
                    @foreach($errors->get('premiere_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>


                <div class="form-group  @if($errors->get('deux_sceance')) has-error @endif" >
              <label for="">10h30->12h15( module : salle) </label>
              <input type="text"  name='deux_sceance' class="form-control" value="{{ old ('deux_sceance') }}" >
              @if($errors->get('deux_sceance'))
                    @foreach($errors->get('deux_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>




                <div class="form-group  @if($errors->get('troi_sceance')) has-error @endif" >
              <label for="">14h30->16h15( module : salle) </label>
              <input type="text"  name='troi_sceance' class="form-control" value="{{ old ('troi_sceance') }}" >
              @if($errors->get('troi_sceance'))
                    @foreach($errors->get('troi_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>
                       

                <div class="form-group  @if($errors->get('quatre_sceance')) has-error @endif" >
              <label for="">16h30->18h15( module : salle) </label>
              <input type="text"  name='quatre_sceance' class="form-control" value="{{ old ('quatre_sceance') }}" >
              @if($errors->get('quatre_sceance'))
                    @foreach($errors->get('quatre_sceance') as $message)
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