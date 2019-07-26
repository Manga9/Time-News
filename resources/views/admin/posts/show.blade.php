@extends('admin/layouts/master')

@section('content')

<div class="show">
    <div class="container edit-cont">
        <h2 class="text-center">Posts</h2>
        @include('admin.layouts.message')
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">body</th>
                <th scope="col">Category</th>
                <th scope="col">Controles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{  $post->title }}</td>
                        <td>{{ substr($post->body, 0, 100) }}...</td>
                        <td>
                            @foreach ($cats as $cat)
                                @if($post->category_id == $cat->id)
                                    {{$cat->name}}
                                @endif
                            @endforeach
                        </td>
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
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
            <li class="page-item">{{ $posts->links() }}</li>
            </ul>
        </nav>
        <a href="{{ route('posts.create') }}"> <button class='btn btn-primary control'><i class="fas fa-plus"></i> Add New post</button> </a>
    </div>
</div>

@stop
