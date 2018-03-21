<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //we are  ensuring that only these values can be updated or inserted to database using mass assignment(basically setting a bunch of fields on the model in a single go, rather than one by one, something like: $user = new User(Input::all());)
    protected $fillable = ['album_id','description','photo','title', 'size'];

    public function album(){
        return $this->belongsTo(Album::class);

    }
}
