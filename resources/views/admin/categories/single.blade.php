@extends('admin/layouts/master')

@section('content')

<div class="show">
    <div class="container edit-cont">
        <h2 class="text-center">{{$category->name}} Catgeory  ( {{$category->posts()->count()}} ) Post</h2>
        @include('admin.layouts.message')
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">body</th>
                <th scope="col">Controles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    @if ($post->category_id == $category->id)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{  $post->title }}</td>
                        <td>{{ substr($post->body, 0, 100) }}...</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}">
                                <button class='btn btn-info'><i class='fas fa-edit'></i></button>
                            </a>
                            <form id="delete-{{$post->id}}" style="display: none" method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>
                            <a href="{{ route('posts.index') }}" onclick="
                                if (confirm('Are you sure ?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-{{$post->id}}').submit();
                                } else {
                                    event.preventDefault();
                                }
                            "
                            >
                                <button class='btn btn-danger'><i class='fas fa-trash'></i></button>
                            </a>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
