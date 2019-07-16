@extends('user/layouts/master')

@section('content')

<div class="home">
    <div class="container edit-cont">
        <div class="main-news">
            <div class="row">
                <div class="col-md">
                    <div class="news">
                        <div class='news-img'>
                            <img src="{{ asset('images/post12.jpg') }}" alt="">
                        </div>
                        <a href='#'>
                        <div class='overlay'>
                            <p class='category business'>Business</p>
                            <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                            <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="news">
                        <a href='#'>
                        <div class='overlay'>
                            <p class='category technology'>Technology</p>
                            <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                            <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                        </div>
                        </a>
                        <img src="{{ asset('images/post33.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-news">
            <div class="row">
                <div class="col-md">
                    <div class="news">
                        <a href='#'>
                        <div class='overlay'>
                            <p class='category sports'>Sports</p>
                            <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                            <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                        </div>
                        </a>
                        <img src="{{ asset('images/post9-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="news">
                        <a href='#'>
                        <div class='overlay'>
                            <p class='category music'>Music</p>
                            <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                            <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                        </div>
                        </a>
                        <img src="{{ asset('images/post17-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="news">
                        <a href='#'>
                        <div class='overlay'>
                            <p class='category lifestyle'>Lifestyle</p>
                            <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                            <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                        </div>
                        </a>
                        <img src="{{ asset('images/post10-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class="col-md-8">
                <div class="main-content">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{ asset('images/post10-1.jpg') }}" class="d-block w-100" alt="...">
                            <a href='#'>
                                <div class='overlay'>
                                    <p class='category lifestyle'>Lifestyle</p>
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                            </a>
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('images/post12.jpg') }}" class="d-block w-100" alt="...">
                            <a href='#'>
                                <div class='overlay'>
                                    <p class='category lifestyle'>Lifestyle</p>
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                            </a>
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('images/post33.jpg') }}" class="d-block w-100" alt="...">
                            <a href='#'>
                                <div class='overlay'>
                                    <p class='category lifestyle'>Lifestyle</p>
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                            </a>
                            </div>
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
                    <div class='popular-posts'>
                        <h2>Popular Posts</h2>
                        <div class="main-post">
                            <div class='main-img'>
                                <a href='#'><img src="{{ asset('images/post10-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="main-content">
                                <a href='#'><h3 class="title">I find that the harder I work, the more luck I seem to have.</h3></a>
                                <p class="date"><i class="far fa-clock"></i> 18 Apr 2019</p>
                                <p class="body">Donec diam orci, egestas nec tempus vulputate, hendrerit sit amet enim. Suspendisse pellentesque sit amet erat ut tristique. Praesent id lacinia ipsum. Etiam fermentum felis id placerat commodo. Fusce non ultricies elit, sit amet suscipit diam.</p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md">
                                <div class='post-img'>
                                    <a href='#'><img src="{{ asset('images/post10-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href='#'><h3 class="title">I find that the harder I work, the more luck I seem to have.</h3></a>
                                    <p class="date"><i class="far fa-clock"></i> 18 Apr 2019</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class='post-img'>
                                    <a href='#'><img src="{{ asset('images/post10-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href='#'><h3 class="title">I find that the harder I work, the more luck I seem to have.</h3></a>
                                    <p class="date"><i class="far fa-clock"></i> 18 Apr 2019</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class='post-img'>
                                    <a href='#'><img src="{{ asset('images/post10-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href='#'><h3 class="title">I find that the harder I work, the more luck I seem to have.</h3></a>
                                    <p class="date"><i class="far fa-clock"></i> 18 Apr 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <aside>
                    <div class="recent-news">
                        <h2>Recent News</h2>
                        <ul>
                            <li>
                                <a href='#'>
                                <div class="recent-img">
                                    <img src="{{ asset('images/post10-1.jpg') }}" alt="">
                                </div>
                                <div class="recent-content">
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                <div class="recent-img">
                                    <img src="{{ asset('images/post10-1.jpg') }}" alt="">
                                </div>
                                <div class="recent-content">
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                <div class="recent-img">
                                    <img src="{{ asset('images/post10-1.jpg') }}" alt="">
                                </div>
                                <div class="recent-content">
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                <div class="recent-img">
                                    <img src="{{ asset('images/post10-1.jpg') }}" alt="">
                                </div>
                                <div class="recent-content">
                                    <p class='title'>I find that the harder I work, the more luck I seem to have.</p>
                                    <p class="date"><i class="far fa-clock"></i> April 18, 2019</p>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <h2>Social Links</h2>
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-youtube"></i></li>
                        </ul>
                    </div>
                    <div class="categories">
                        <h2>Categories</h2>
                        <a href='#'><span>Business</span></a>
                        <a href='#'><span>Sports</span></a>
                        <a href='#'><span>Lifestyle</span></a>
                        <a href='#'><span>Plitics</span></a>
                        <a href='#'><span>Music</span></a>
                        <a href='#'><span>Technology</span></a>
                    </div>
                    <div class="archives">
                        <h2>Archives</h2>
                        <a href='#'><span><i class="fas fa-long-arrow-alt-right"></i> April 2019</span></a>
                        <a href='#'><span><i class="fas fa-long-arrow-alt-right"></i> January 2019</span></a>
                        <a href='#'><span><i class="fas fa-long-arrow-alt-right"></i> December 2018</span></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

@stop
