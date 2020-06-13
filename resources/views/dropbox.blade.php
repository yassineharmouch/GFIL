
 @extends('layouts.enseignant')
 @section('content') 
   
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if($errors->any())
                <h4>{{$errors->first()}}</h4>
                @endif
                <div class="title m-b-md">
                    Upload file to dropbox
                    <form enctype="multipart/form-data" method="post" action="upload_to_dropbox">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <input type="file" name="upload_file" />
                            <input type="submit" value="Upload to Dropbox" />
                    </form>
                </div>
            </div>
        </div>
 @endsection