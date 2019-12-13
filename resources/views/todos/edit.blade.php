@extends('layout.app')
@section('content')
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Todo</a></h2>
<br>
<a href="/todo/{{$todo->id}}" class="btn btn-success">Go Back</a>
<br><br>
<form action="{{ route('todo.update', $todo->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Text</strong>
            <input type="text" name="text" class="form-control" placeholder="Enter Title" value="{{ $todo->text }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Body</strong>
            <textarea class="form-control" col="4" name="body" placeholder="Enter Description" >{{ $todo->due }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Due</strong>
            <input type="text" name="due" class="form-control" placeholder="Enter Product Code" value="{{ $todo->body }}">
            <span class="text-danger">{{ $errors->first('product_code') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>


@endsection
