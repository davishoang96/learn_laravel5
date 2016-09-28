@extends('layout')

@section('content')
  @if (empty($people))
    <h1>Nothing Here</h1>
  @endif
    <h1>There are something here</h1>
  @foreach ($people as $person)
    <li>{{$person}}</li>
  @endforeach
@endsection
