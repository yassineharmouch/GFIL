<?php

namespace App\Http\Controllers\Enseignant;
use App\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $data = Etudiant::latest()->paginate(5);
        return view('etudiant.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
       
                   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $request->validate([
            'nom'    =>  'required',
            'prenom' =>  'required',
            'cne'    =>  'required',
            'grp'    =>  'required',
            'note'   =>  'required',
            'image'  =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'nom'       =>   $request->nom,
            'prenom'        =>   $request->prenom,
            'cne'       =>   $request->cne,
            'grp'        =>   $request->grp,
            'note'        =>   $request->note,
            'image'            =>   $new_name
        );

        Etudiant::create($form_data);

        return redirect('etudiant')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Etudiant::findOrFail($id);
        return view('etudiant.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $data = Etudiant::findOrFail($id);
        return view('etudiant.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'nom'    =>  'required',
                'prenom'     =>  'required',
                'cne'    =>  'required',
                'grp'     =>  'required',
                'note'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'nom'    =>  'required',
                'prenom'     =>  'required',
                'cne'    =>  'required',
                'grp'     =>  'required',
                'note'     =>  'required'
            ]);
        }

        $form_data = array(
            'nom'    =>  $request->nom,
            'prenom'     =>  $request->prenom,
            'cne'    =>  $request->cne,
            'grp'     =>  $request->grp,
            'note'     =>  $request->note,
            'image'         =>  $image_name
        );

        Etudiant::whereId($id)->update($form_data);
        return redirect('etudiant')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Etudiant::findOrFail($id);
        $data->delete();
        return redirect('etudiant')->with('success', 'Data is successfully deleted');
    }
}
