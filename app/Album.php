<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //we are  ensuring that only these values can be updated or inserted to database using mass assignment(basically setting a bunch of fields on the model in a single go, rather than one by one, something like: $user = new User(Input::all());)
   protected $fillable = ['name','description','cover_image'];

   public function photos(){
       return $this->hasMany(Photo::class);
   }
}
