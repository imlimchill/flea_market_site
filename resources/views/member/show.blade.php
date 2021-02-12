@extends('layouts.main')

@section('content')

<h1>{{ $user-> id}}</h1>


<div class="card">
    <div class="roe no-gutters">
        <div class="card-body">
            <div class="card-title">
                <p>{{$user->name}}</p>
            </div>
            <div>
                <p>{{ $user-> name}}</p>
                <p>{{ $user-> email}}</p>
                <p>{{ $user-> real_name}}</p>
                <p>{{ $user-> tel}}</p>
                <p>{{ $user-> addres}}</p>
                <p>{{ $user-> postal}}</p>
            </div>
        </div>
    </div>
</div>
<form action="member/{{$user->id}}" method="POST">
@csrf
@method('DELETE')
<button type="submit"> 삭제하기 </button>
</form>

@endsection