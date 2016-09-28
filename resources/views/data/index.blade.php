@extends('layout')

@section('content')
  @if (empty($film))
    <h1>Nothing Here</h1>
  @endif
    <h1>There are something here</h1>
  @foreach ($film as $watch)
    <li>{{$watch}}</li>
  @endforeach
@endsection
