@extends('layouts.app')

@section('content')
    @if(count($albums) > 0)
    <h1 class="text-center">Albums</h1>
    <hr>
    <div class="row">
    @foreach($albums as $album)
     
     <div class=" col-xs-6 col-md-3 col-sm-4">
         <h3>{{$album->name}}</h3>
         <a href="{{route('albums.show',$album->id)}}"> <img class="img-thumbnail" src="/storage/album_covers/{{$album->cover_image}}" alt=""></a>
     </div>   
        
    @endforeach
    </div>
     @else
        <h2 class="text-center">No albums to display</h2>
    @endif
@endsection