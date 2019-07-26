@extends('admin/layouts/master')

@section('content')

<div class="show">
    <div class="container edit-cont">
        <h2 class="text-center">Categories</h2>
        @include('admin.layouts.message')
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Controles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cats as $cat)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{  $cat->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $cat->id) }}">
                                <button class='btn btn-info'><i class='fas fa-edit'></i></button>
                            </a>
                            <form id="delete-{{$cat->id}}" style="display: none" method="POST" action="{{ route('categories.destroy', $cat->id) }}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>
                            <a href="{{ route('categories.index') }}" onclick="
                                if (confirm('Are you sure ?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-{{$cat->id}}').submit();
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
        <a href="{{ route('categories.create') }}"> <button class='btn btn-primary control'><i class="fas fa-plus"></i> Add New Category</button> </a>
    </div>
</div>

@stop
