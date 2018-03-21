@extends('layouts.app')

@section('content')
    <h3>Upload photo</h3>

    {!! Form::open(['route' => 'photos.store','files' => true]) !!}
    {{--empty string is value--}}
    {{ Form::bsHidden('album_id',$album_id) }}
    {{ Form::bsText('title','',array_merge(['placeholder' => 'Photo title']) ) }}
    {{ Form::bsTextarea('description','',array_merge(['placeholder' => 'Photo Description']) ) }}
    {{Form::bsFile('photo')}}
    {{ Form::bsSubmit('Submit') }}

    {!! Form::close() !!}


@endsection