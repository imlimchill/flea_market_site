
@extends('layouts.main')

@section('title')
    Edit Boards
@endsection

@section('content')
    <div style="margin-top:100px; margin-left:100px">
    <form action="/review/{{$review->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">제목</label>
        <p><input type="text" name="title" id="title" value="{{$review->title}}"></p>
        <p><label for="story">본문</label><p>
        <p><textarea name="story" id="story"cols="30" rows="10">{{$review->story}}</textarea></p>
        <input type="submit" value="수정">
    </form>
    </div>
@endsection