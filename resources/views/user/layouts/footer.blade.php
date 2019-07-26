<footer>
    <div class="container edit-cont">
        <div class="row">
            <div class="col-md">
                <h2> Recent Posts </h2>
                <ul class='recent-posts'>
                    @foreach ($getlast5posts as $post)
                        <li>
                            <a href="{{ route('user.post.show', $post->id) }}"><i class="fas fa-long-arrow-alt-right"></i> {{$post->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md">
                <h2> Categories </h2>
                <ul class='categories'>
                    @foreach ($cats as $cat)
                        <li>
                            <a href="{{ route('user.category.show', $cat->id) }}"><i class="fas fa-long-arrow-alt-right"></i> {{$cat->name}}</a>
                        </li>
                    @endforeach
                </ul>
                <h2> Social Links </h2>
                <ul class='social-links'>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                </ul>
            </div>
            <div class="col-md">
                <h2>Gallery</h2>
                <ul class="gallery">
                    @foreach($getlast5posts as $post)
                        <li>
                            <a href="{{ route('user.post.show', $post->id) }}">
                                <img src=" {{ $post->image }} " alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
