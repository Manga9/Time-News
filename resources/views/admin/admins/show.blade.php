@extends('admin/layouts/master')

@section('content')

<div class="show">
    <div class="container edit-cont">
        <h2 class="text-center">Admins</h2>
        @include('admin.layouts.message')
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Controles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{  $admin->name }}</td>
                        <td>{{  $admin->email }}</td>
                        <td>
                            <a href="{{ route('admins.edit', $admin->id) }}">
                                <button class='btn btn-info'><i class='fas fa-edit'></i></button>
                            </a>
                            <form id="delete-{{$admin->id}}" style="display: none" method="POST" action="{{ route('admins.destroy', $admin->id) }}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>
                            <a href="{{ route('admins.index') }}" onclick="
                                if (confirm('Are you sure ?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-{{$admin->id}}').submit();
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
        <a href="{{ route('admins.create') }}"> <button class='btn btn-primary control'><i class="fas fa-plus"></i> Add New Admin</button> </a>
    </div>
</div>

@stop
