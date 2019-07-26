@extends('admin/layouts/master')

@section('content')

<div class="add">
    <div class="container edit-cont">
        <h2 class='text-center'>Add New Post</h2>
        <form method="POST" action="{{ route('posts.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name='body' id='body' class='form-control'></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name='category'>
                    <option selected disabled>none</option>
                    @foreach($cats as $cat)
                        <option value="{{ $cat->id }}"> {{ $cat->name }} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@stop
