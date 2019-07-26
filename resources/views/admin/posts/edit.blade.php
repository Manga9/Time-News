@extends('admin/layouts/master')

@section('content')

<div class="add">
    <div class="container edit-cont">
        <h2 class='text-center'>Edit {{ $post->title }} Post</h2>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name='body' id='body' class='form-control'>{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="image" class="form-control" value="{{ $post->image }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="newImage" class="form-control" id="image">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name='category'>
                    @foreach($cats as $cat)
                        <option value="{{ $cat->id }}"
                            @if($post->cat_id == $cat->id)
                                selected
                            @endif
                        > {{ $cat->name }} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@stop
