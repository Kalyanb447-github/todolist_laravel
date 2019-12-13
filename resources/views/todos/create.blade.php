@extends('layout.app')
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Todo</a></h2>
<br>

<form action="{{ route('todo.store') }}" method="POST" name="add_product">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Text</strong>
            <input type="text" name="text" class="form-control" placeholder="Enter Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Body</strong>
            <textarea class="form-control" col="4" name="body" placeholder="Enter Description"></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Due</strong>
            <input type="text" name="due" class="form-control" placeholder="Enter Product Code">
            <span class="text-danger">{{ $errors->first('product_code') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>


@endsection
