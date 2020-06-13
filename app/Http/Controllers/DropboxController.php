<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
 
class DropboxController extends BaseController{

  public function uploadToDropbox(){
                return View::make('dropbox');
             }

  public function uploadToDropboxFile(Request $RequestInput){
                $file_src=$RequestInput->file("upload_file"); //file src
            $is_file_uploaded = Storage::disk('dropbox')->put('public-uploads',$file_src);
            
            if($is_file_uploaded){
                return Redirect::back()->withErrors(['msg'=>'Succesfuly file uploaded to dropbox']);
            } else {
                return Redirect::back()->withErrors(['msg'=>'file failed to uploaded on dropbox']);
            } 
            }
}