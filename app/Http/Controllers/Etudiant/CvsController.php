<?php

namespace App\Http\Controllers\Etudiant;
use App\Cv;
use App\User;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use Auth;

class Cvscontroller extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cv::latest()->paginate(5);
        return view('cvs.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Cv;
        if($request->file('file'))
        {
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
             $request->file->move('storage/', $filename);
             $data->file= $filename;
         }
         $data->nom=$request->nom;
         $data->prenom=$request->prenom;
         $data->address=$request->adress;
         $data->filiere=$request->filiere;
         $data->niveau=$request->niveau;//niveau scolaire
         $data->description=$request->description;
         $data->save();
        
      

        return redirect('cvs')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cv::findOrFail($id);
        return view('cvs.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cv::findOrFail($id);
        return view('cvs.edit', compact('data'));
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
       
        $file_name = $request->hidden_file;
        $data = new Cv;
        if($request->file('file')!='')
        {
            $file_name = $request->hidden_file;
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file= $filename;
            $data->nom=$request->nom;
            $data->prenom=$request->prenom;
            $data->address=$request->address;
            $data->filiere=$request->filiere;
            $data->niveau=$request->niveau;
            $data->description=$request->description;
            $data->save();
       
         }
    
        $form_data = array(
            'nom'    =>  $request->nom,
            'prenom'     =>  $request->prenom,
            'address'    =>  $request->address,
            'filiere'     =>  $request->filiere,
            'niveau'     =>  $request->niveau,
            'description'     =>  $request->description,
            'file'         =>  $file_name
        );

        Cv::whereId($id)->update($form_data);
        return redirect('cvs')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Cv::findOrFail($id);
        $data->delete();
        return redirect('cvs')->with('success', 'Data is successfully deleted');
    }
    public function download($file)
    {
       return response()->download('storage/'.$file);
    }

}