<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{

    public function create($id){

        $album_id = $id;

        return view('photos.create',compact('album_id'));

    }


    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'photo' =>  'required|image|max:2048',
        ]);

        //getting the filename with the extension
        $fileNameWithExt = $request->file('photo')->getClientOriginalName();

        //getting the filename without the extension
        $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

        //getting the extension
        $extension =  $request->file('photo')->getClientOriginalExtension();

        //createing new filename
        $fileNameToStore =$fileName."_".time().".".$extension;

        //Upload image
        $path = $request->file('photo')->storeAs("public/photos",$fileNameToStore);

        //php artisan storage:link   ----->   to link the storage folder to the main public folder(for security reason)

        //Create album



        $photo = new Photo();
        $photo->title = $request->title;
        $photo->description = $request->description;
        $photo->photo = $fileNameToStore;
        $photo->size = $request->file('photo')->getClientSize();
        $photo->album_id = $request->album_id;

        $photo->save();

        return redirect('/albums/'.$photo->album_id)->with('success','Photo uploaded');
    }


    public function show($id){

        $photo = Photo::find($id);

        return view('photos.show',compact('photo'));
    }


    public function destroy($id){

        $photo = Photo::find($id);
        if(Storage::delete("public/photos/".$photo->photo)) {
            $photo->delete();
        }
        return redirect('/albums/'.$photo->album_id)->with('success','Photo deleted');
    }





}
