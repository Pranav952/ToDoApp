<!doctype html>
<html lang="en">

  <head>
    <title>Todo App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    #btn{
position: relative;
left: 20%;
width: 10em;
    }
    p{
      color: red;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ToDoApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('task/alltask')}}">All Task <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url("task/create")}}">New Task</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('task/trash')}}">Trash</a>
      </li>
      @if(session()->has('user'))
        <li class="nav-item">
       <a class="nav-link" href="javascript:void(0)">Welcome,{{session()->get('user')}}</a>
      </li>
       <li class="nav-item">
       <a class="nav-link" href="{{url('task/logout')}}">LogOut</a>
      </li>
         @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('task/register')}}">Register</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="{{url('task/login')}}">Login</a>
      </li>
      </li>
      @endif
    </ul>
  </div>
</nav>
    @yield('content')
    </body>
</html>
