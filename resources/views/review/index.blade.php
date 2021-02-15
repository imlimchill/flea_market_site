@extends('layouts.main')

@section('title')
    Board Index
@endsection


@section('content')
<p>Board Index</p>
    @foreach ($review as $item)
    <a href="/review/{{$item->id}}">Title : {{$item->title}}</a><br>
    @endforeach

@endsection

