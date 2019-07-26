@extends('admin/layouts/master')

@section('content')

<div class="add">
    <div class="container edit-cont">
        <h2 class='text-center'>Edit {{ $cat->name }} Category</h2>
        <form method="POST" action="{{ route('categories.update', $cat->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ex: Sports" value="{{ $cat->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@stop
