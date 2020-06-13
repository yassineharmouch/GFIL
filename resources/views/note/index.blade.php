@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">

          
          @if(session()->has('success'))
                  <div class="alert alert-success">
                 {{ session()->get('success') }}

                  </div>
                 @endif
 
          <h1> Les Notes </h1>
          
          <div class="pull-right">
          <a href="{{ url('notes/create') }}" class="btn btn-success">Ajouter une note  </a>
          </div>

            <table class="table">
             <head>
              <tr>
                  <th>Nom Et Prénom   </th>
                  <th>Matiére</th>
                  <th>cc1</th>
                  <th>cc2</th>
                  <th>Note</th>
                  
                  <th>Action</th>

              </tr>
            </head>
              <body>
              @foreach($notes as $note)
              <tr>
                  <td>{{ $note->nom_et_prenom }}  </td>
                  <td>{{ $note->matiere }}</td>
                  <td>{{ $note->cc1 }}</td>
                  <td>{{ $note->cc2 }}</td>
                  <td>{{ $note->note_finale }}</td>
                  
                  
                  <td>
                  <form action=  "{{ url('notes/'.$note->id) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                


                         
                  <a href="" class ="btn btn-primary">Details</a>
                  @can('update' , $note)
                  <a href="{{ url('notes/'.$note->id.'/edit') }}" class ="btn btn-default">Editer</a>
                  @endcan

                   @can('delete' , $note)
                  <button  type='submit' class ="btn btn-danger">Supprimer</button>
                  @endcan
                </form>
                  
                  </td>
              </tr>
                @endforeach
              </body>
          </table>
        </div>
    </div>
</div>          
@endsection