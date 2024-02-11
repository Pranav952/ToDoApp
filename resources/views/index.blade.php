@extends("layouts.app")
@section('content')

<h1>TaskList</h1>

  <form action="" method="get" class="col-2">
    <div class="form-group">
      <input type="search" name="search" id="" class="form-control" placeholder="Search" aria-describedby="helpId" value="{{$search}}">
      <a href="{{url('task/alltask')}}"><button class="btn btn-danger" type="button">Reset</button></a>
  
      <button  class="btn btn-primary">Search</button>
    </div>
  </form>

<ul class="list-group">
    @foreach ($table1 as $item)
  <li class="list-group-item">{{$item->Task}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url("task/delete")}}/{{$item->id}}"><button class="btn btn-danger" id="btn">Move To Trash</button></a>
<a href="{{url("task/edit")}}/{{$item->id}}"><button class="btn btn-primary" id="btn">Update</button></a></li>
</ul>
@endforeach
@endsection