@extends('layouts.app')

@section('content')
    @if($photo)
        <h1 class="text-center">{{$photo->title}}</h1>
        <hr>
        <div class="row">


                <div class="col-sm-offset-2 col-sm-6">
                    <img  src="/storage/photos/{{$photo->photo}}" alt="">
                    <p class="well">{{$photo->description}}</p>
                    <div>

             {!! Form::open(['route' => ['photos.destroy',$photo->id ], 'method' => 'DELETE','onsubmit' => ' return confirm("Are you sure?")']) !!}
                        {{ Form::bsSubmit('Delete',array_merge(['class' => 'btn btn-danger'])) }}
                        {!! Form::close() !!}

        </div>
                </div>


        </div>
    @else
        <h2 class="text-center">No albums to display</h2>
    @endif
@endsection