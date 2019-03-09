<?php

namespace App\Http\Controllers;
use App\Songs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class SongsController extends Controller
{
    //
    public function store(Request $req)
    {
        # code...
        
        $file = $req->file('song');
        $extension = $file->getClientOriginalExtension();
        if($extension != 'mp3'){
            return redirect()->back();
        }

        $req->song->store('songs');

    	$entry = new Songs;
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
		$entry->save();
		return redirect('/home'); 
    }
}
