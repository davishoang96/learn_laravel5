@extends('layout')


@section('content')

    <h1>All cards</h1>
    @foreach($card as $item)

    <li>{{$item->title}}</li>

    @endforeach
    @endsection