@extends('layout.app')
@section('content')
<a class="btn btn-default" href="/">Back</a>
{{-- <h1>{{$todo->text}}</h1> --}}
       <h1><a href="todo/{{$todo->id}}">{{$todo->due}}</a></h1>
       <div class="label label-danger">{{$todo->text}}</div>
       <hr>
       <p>{{$todo->body}}</p>

       <br><br>
       <a href="/todo/{{$todo->id}}/edit" class="btn btn-success">Edit</a>
       <br><br>


      <form action="{{ route('todo.destroy',  $todo->id) }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button class="btn btn-danger">Delete</button>
    </form>
@endsection
