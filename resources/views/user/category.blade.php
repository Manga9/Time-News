@extends('user.layouts.master')

@section('content')
<div class="post">
    <div class="container edit-cont">
        <div class='row'>
            <div class="col-md-8">
                <div class="main-content">
                    @foreach ($posts as $post)
                    @if ($post->category_id == $category->id)
                    <div class="postt">
                        <h3 class="title"> {{ $post->title }}</h3>
                        <span class="date"><i class="far fa-clock"></i> {{ date_format($post->created_at, 'Y-m-d') }} </span>
                        <div class="post-img">
                            <img src="{{ $post->image }}" alt="">
                        </div>
                        <div class="body">{{ $post->body }} </div>
                        <span class="category {{strtolower($post->category()->select('name')->get()->implode('name'))}}">{{$post->category()->select('name')->get()->implode('name')}}</span>
                    </div>
                    <br>
                    @endif
                    @endforeach
                </div>
            </div>
            @include('user.layouts.aside')
        </div>
    </div>
</div>
@endsection
