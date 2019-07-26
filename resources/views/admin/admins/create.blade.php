@extends('admin/layouts/master')

@section('content')

<div class="add">
    <div class="container edit-cont">
        <h2 class='text-center'>Add New Admin</h2>
        <form method="POST" action="{{ route('admins.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ex: Ahmed">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ex: a@a.com">
            </div>
            <div class="form-group">
                <label for="password">Passowrd</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@stop
