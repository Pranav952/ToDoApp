@extends("layouts.app")

@section('content')
    <h1>{{$title}}</h1>
    <form method="post" action="{{url($url)}}"> 
        @csrf
        <div class="form-group">
            <label for="Description">Task Description</label>
            <input type="text" class="form-control" name="Task" value="{{isset($table1)?$table1->Task:""}}"> 
            
        </div>
        <p>
            @error('Task')
            {{$message}}
            @enderror
        </p>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{$title1}}</button>
        </div>
    </form>
    @endsection
