<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests\noteRequest;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    
    public function __construct(){
        $this->middleware('auth');
    }

   /* public function moyNotes($notes){
        $sum=0;
            foreach ($notes as $note){
                
                $sum+=$note->note_finale;
            }
            return $sum/count($notes);
    } */

    public function index() {
        

        
        if(Auth::user()->role_id==3) {
        //dd(Auth::user()->id);

            $listenote = Note::where('nom_et_prenom','=',Auth::user()->name)->get();
        }else{
            $listenote = Auth::user()->notes; 
        }
        $notes =  Note::where('nom_et_prenom','=',Auth::user()->name)->get();
        //dd($notes);
       // $this->moyNotes($notes);
        return view('note.index', ['notes' => $listenote]);
        
  
        

    }
    public function create() {
        return view('note.create');
    }

    public function store(noteRequest $request) {
        $note = new Note();
        $note->nom_et_prenom = $request->input('nom_et_prenom');
        $note->matiere = $request->input('matiere');
        $note->cc1 = $request->input('cc1');
        $note->cc2 = $request->input('cc2');
        $note->note_finale = $request->input('note_finale');
        $note->user_id = Auth::user()->id;

      
        $note->save();
        session()->flash('success' , 'la note à été bien enregistré !!');

        return redirect('notes');
    }
     
    public function edit ($id) {
        $note = Note::find ($id);
        $this->authorize('update',$note);
        return view('note.edit', [ 'note' => $note ]);

        
    }
    public function update(noteRequest $request , $id) {
        $note = Note::find($id);
        $note->nom_et_prenom = $request->input('nom_et_prenom');
        $note->matiere = $request->input('matiere');
        $note->cc1 = $request->input('cc1');
        $note->cc2 = $request->input('cc2');
        $note->note_finale = $request->input('note_finale');
        $note->save();
        return redirect('notes');
    }

    public function destroy(Request $request ,$id) {
        $note = Note::find($id);
        $note->delete();
        $this->authorize('delete',$note);
        return redirect ('notes');
       
       
    }
}
