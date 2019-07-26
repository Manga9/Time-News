            <div class="col-md-4">
                <aside>
                    <div class="recent-news">
                        <h2>Recent News</h2>
                        <ul>
                            @foreach ($getlast5posts as $post)
                            <li>
                            <a href='{{ route('user.post.show', $post->id) }}'>
                                <div class="recent-img">
                                    <img src="{{ $post->image}}" alt="">
                                </div>
                                <div class="recent-content">
                                    <p class='title'>{{ $post->title }}</p>
                                    <p class="date"><i class="far fa-clock"></i> {{ date_format($post->created_at, 'Y-m-d') }}</p>
                                </div>
                                </a>
                            </li>
                            @endforeach
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
                        @foreach ($cats as $cat)
                            <a href='{{ route('user.category.show', $cat->id) }} '><span>{{$cat->name}}</span></a>
                        @endforeach
                    </div>
                </aside>
            </div>
