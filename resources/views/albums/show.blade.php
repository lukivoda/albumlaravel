@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$album->name}}</h1>
    <h3 style="overflow:hidden;"><a class="btn btn-info pull-left" href="{{route("home",$album->id)}}">Go back</a>
        <a class="btn btn-success pull-right" href="{{route("photos.create",$album->id)}}">Upload photo to <strong><i>{{$album->name}} </i></strong> album</a></h3>
    <hr>
    @if(count($photos) > 0)

        <hr>
        <div class="row">
            @foreach($photos as $photo)

                <div class=" col-xs-6 col-md-3 col-sm-4">
                    <h3>{{$photo->title}}</h3>
                    <a href="{{route('photos.show',$photo->id)}}"> <img class="img-responsive" src="/storage/photos/{{$photo->photo}}" alt=""></a>
                </div>

            @endforeach
        </div>
    @else
        <h2 class="text-center">No photos to display</h2>
    @endif



@endsection