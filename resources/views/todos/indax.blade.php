@extends('layout.app')
@section('content')
<h1>Todos</h1>
@if (count($todos)>0)
    @foreach ($todos as $item)
       <div class="well">
       <h3><a href="todo/{{$item->id}}">{{$item->text}}</a><span class="label label-danger pull-right">{{$item->due}}</span>
       </h3>
       </div>
    @endforeach
@endif
@endsection

