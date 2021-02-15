@extends('layouts.main')

@section('title')
    Show Board
@endsection

@section('content')
    <p>Show Board</p>
    <p>제목 : {{$review -> title}}</p>
    <p>내용 : {{$review -> story}}</p>
    <a href="/review/{{$review->id}}/edit"><button>수정</button></a>
    <form style="display:inline;" action="/review/{{$review->id}}" method="POST">
        @csrf
        @method('DELETE')
    <button>삭제</button>
    </form>


@endsection