<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index() {

        $albums =  Album::all();
        return view('albums.index',compact('albums'));
    }


    public function create(){

        return view('albums.create');
    }


    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'cover_image' =>  'required|image|max:2048',
        ]);

        //getting the filename with the extension
      $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

        //getting the filename without the extension
      $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

      //getting the extension
      $extension =  $request->file('cover_image')->getClientOriginalExtension();

      //createing new filename
        $fileNameToStore =$fileName."_".time().".".$extension;

       //Upload image
        $path = $request->file('cover_image')->storeAs("public/album_covers",$fileNameToStore);

        //php artisan storage:link   ----->   to link the storage folder to the main public folder(for security reason)

       //Create album



        $album = new Album();
        $album->name = $request->name;
        $album->description = $request->description;
        $album->cover_image = $fileNameToStore;

        $album->save();

        return redirect('/albums')->with('success','Album created');
    }


    public function show($id) {

        $album = Album::find($id);
        // return $album;
        $photos = $album->photos;
        return view('albums.show',compact('album','photos'));
    }


}
