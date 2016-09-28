@extends('layout')

@section('content')



  @foreach ($films as $games)
    <li>{{$games->title}}</li>
  @endforeach

@endsection
