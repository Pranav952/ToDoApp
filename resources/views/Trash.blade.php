@extends('layouts.app')
@section('content')
<h1>All Trash Task</h1>
    <ul class="list-group">
    @foreach ($table1 as $item)
  <li class="list-group-item">{{$item->Task}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url("task/pdelete")}}/{{$item->id}}"><button class="btn btn-danger" id="btn">Delete</button></a>
<a href="{{url("task/restore")}}/{{$item->id}}"><button class="btn btn-primary" id="btn">Restore</button></a></li>
</ul>
@endforeach
    @endsection
    