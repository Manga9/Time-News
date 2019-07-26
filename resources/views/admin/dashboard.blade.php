@extends('admin/layouts/master')

@section('content')

<div class="dashboard">
    <h1 class='text-center'>Dashboard</h1>
    <div class="container edit-cont">
        <div class="row">
            <div class="col-md-4">
            <a href="{{ route('admins.index') }}">
                <div class="box admins">
                    <span class="icon admins-icon"><i class="fas fa-users"></i></span>
                    <div class="details">
                        <p class="category-name">Admins</p>
                    <span class="count">{{$admins}}</span>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a href="{{ route('posts.index') }}">
                <div class="box admins">
                    <span class="icon admins-icon"><i class="fas fa-table"></i></span>
                    <div class="details">
                        <p class="category-name">Posts</p>
                        <span class="count">{{$posts->count()}}</span>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-4">
            <a href="{{ route('categories.index') }}">
                <div class="box admins">
                    <span class="icon business-icon"><i class="far fa-newspaper"></i></span>
                    <div class="details">
                        <p class="category-name">Catgeories</p>
                        <span class="count">
                            {{ $cats->count() }}
                        </span>
                    </div>
                </div>
            </a>
            </div>

        </div>

        <div class="card">
            <div class="card-header">
                Catgeoires
            </div>
            <div class="card-body">
                <ul>
                    @foreach($cats as $cat)
                        <li><a href=" {{ route('categories.show', $cat->id) }} "> {{ $cat->name }} </a>  <span class="float-right">{{$cat->posts()->count()}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>

@stop
