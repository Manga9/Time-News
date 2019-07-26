@extends('user/layouts/master')

@section('content')

<div class="home">
    <div class="container edit-cont">
        <div class="main-news">
            <div class="row">
                @foreach($last2posts as $post)
                    <div class="col-md">
                            <a href='{{ route('user.post.show', $post->id) }}'>
                        <div class="news">
                            <div class='news-img'>
                                <img src="{{ $post->image }}" alt="">
                            </div>
                            <div class='overlay'>
                            <p class='category {{strtolower($post->category()->select('name')->get()->implode('name'))}}'>{{$post->category()->select('name')->get()->implode('name')}}</p>
                                <p class='title'>{{ $post->title }}</p>
                            <p class="date"><i class="far fa-clock"></i> {{ date_format($post->created_at, 'Y-m-d') }}</p>
                            </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="sub-news">
            <div class="row">
                @foreach($last3posts as $post)
                    <div class="col-md">
                        <div class="news">
                            <a href='{{ route('user.post.show', $post->id) }}'>
                            <div class='overlay'>
                                <p class='category {{strtolower($post->category()->select('name')->get()->implode('name'))}}'>{{$post->category()->select('name')->get()->implode('name')}}</p>
                                <p class='title'>{{ $post->title }}</p>
                                <p class="date"><i class="far fa-clock"></i>  {{ date_format($post->created_at, 'Y-m-d') }}</p>
                            </div>
                            <div class="news-img">
                                <img src="{{ $post->image }}" alt="">
                            </div>
                        </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class='row'>
            <div class="col-md-8">
                <div class="main-content">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($lastPost as $post)
                                <div class="carousel-item active">
                                    <a href="{{ route('user.post.show', $post->id) }}">
                                <img src="{{ $post->image }}" class="d-block w-100" alt="...">
                                    <div class='overlay'>
                                        <p class='category {{strtolower($post->category()->select('name')->get()->implode('name'))}}'>{{$post->category()->select('name')->get()->implode('name')}}</p>
                                    <p class='title'>{{$post->title}}</p>
                                        <p class="date"><i class="far fa-clock"></i> {{ date_format($post->created_at, 'Y-m-d') }}</p>
                                    </div>
                                </a>
                                </div>
                            @endforeach
                            @foreach ($last3posts as $post)
                            <div class="carousel-item">
                                <a href="{{ route('user.post.show', $post->id) }}">
                            <img src="{{ $post->image}}" class="d-block w-100" alt="...">
                                <div class='overlay'>
                                    <p class='category {{strtolower($post->category()->select('name')->get()->implode('name'))}}'>{{$post->category()->select('name')->get()->implode('name')}}</p>
                                <p class='title'>{{$post->title}}</p>
                                    <p class="date"><i class="far fa-clock"></i> {{ date_format($post->created_at, 'Y-m-d') }}</p>
                                </div>
                            </a>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            @include('user.layouts.aside')
        </div>
    </div>
</div>

@stop
