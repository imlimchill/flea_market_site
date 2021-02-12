@extends('layouts.main')

@section('content')
@foreach($users as $user)
<div class="card">
<div class="roe no-gutters">
<div class="card-body">
<div class="card-title">
<a href="member/{{$user->id}}">{{$user->name}}</a>
</form>
</div>
</div>
</div>
</div>
@endforeach
@endsection