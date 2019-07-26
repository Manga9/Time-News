@extends('admin/layouts/master')

@section('content')

<div class="add">
    <div class="container edit-cont">
        <h2 class='text-center'>Edit {{ $admin->name }} Admin</h2>
        <form method="POST" action="{{ route('admins.update', $admin->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ex: Sports" value="{{ $admin->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ex: a@a.com" value="{{ $admin->email }}">
            </div>
            <div class="form-group">
                <input type="hidden" name="password" class="form-control" id="password" value="{{ $admin->password }}">
            </div>
            <div class="form-group">
                <label for="newPass">Passowrd</label>
                <input type="password" name="newPass" class="form-control" id="newPass">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@stop
