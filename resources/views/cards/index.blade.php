@extends('layout')


@section('content')

    <h1>All cards</h1>
   <ul>
       @foreach($card as $item)

           <li><a href="/cards/{{$item->id}}">{{$item->title}}</a></li>

           {{--<li>{{$item->title}}</li>--}}

       @endforeach
   </ul>
    @endsection