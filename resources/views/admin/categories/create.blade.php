@extends('admin/layouts/master')

@section('content')

<div class="add">
    <div class="container edit-cont">
        <h2 class='text-center'>Add New Category</h2>
        <form method="POST" action="{{ route('categories.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ex: Sports">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@stop
