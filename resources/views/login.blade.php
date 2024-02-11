@extends('layouts.app')
@section("content")
<form method="POST" action="{{url('task/login')}}">
  @csrf
  {{-- @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$hi}}</li>
      @endforeach
    </ul>
  </div>
  @endif --}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="Email" value="{{old('Email')}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
  @if($errors->has('Email'))
  <div class="alert alert-danger">
 {{$errors->first('Email')}}
 </div>
 @endif
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password" >
  </div>
  @if($errors->has('Password'))
  <div class="alert alert-danger">
 {{$errors->first('Password')}}
  </div>
  @endif
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if(session('message'))
<div class="alert alert-success" id="message1">{{session('message')}}</div>
@elseif(session('invalid'))
<div class="alert alert-danger" id="invalid">{{session('invalid')}}</div>
  @endif
  <script>
  jQuery(document).ready(function()
  {
    console.log('document is ready')
    setTimeout(function(){
      jQuery('#message1').hide('fast');
      jQuery('#invalid').hide('fast');
    },500);
  
  
  });
  </script>
@endsection
