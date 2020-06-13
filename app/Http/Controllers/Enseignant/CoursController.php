<?php

namespace App\Http\Controllers\Enseignant;

use App\Cour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursController extends Controller
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
        $data = Cour::latest()->paginate(5);
        return view('document.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Cour;
        if($request->file('file'))
        {
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
             $request->file->move('storage/', $filename);
             $data->file= $filename;
         }
         $data->grp=$request->grp;
         $data->prof=$request->prof;
         $data->module=$request->module;
         $data->chapitre=$request->chapitre;
         $data->titre=$request->title;
         $data->description=$request->description;
         $data->save();
        
      

        return redirect('cours')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cour::findOrFail($id);
        return view('document.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cour::findOrFail($id);
        return view('document.edit', compact('data'));
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
        $data = new Cour;
        if($request->file('file')!='')
        {
            $file_name = $request->hidden_file;
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file= $filename;
            $data->grp=$request->grp;
            $data->prof=$request->prof;
            $data->module=$request->module;
            $data->chapitre=$request->chapitre;
            $data->titre=$request->title;
            $data->description=$request->description;
            $data->save();
       
         }
    
        $form_data = array(
            'grp'    =>  $request->grp,
            'prof'     =>  $request->prof,
            'module'    =>  $request->module,
            'chapitre'     =>  $request->chapitre,
            'titre'     =>  $request->titre,
            'description'     =>  $request->description,
            'file'         =>  $file_name
        );

        Cour::whereId($id)->update($form_data);
        return redirect('cours')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Cour::findOrFail($id);
        $data->delete();
        return redirect('cours')->with('success', 'Data is successfully deleted');
    }
    public function download($file)
    {
       return response()->download('storage/'.$file);
    }
}
