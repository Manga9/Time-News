<nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">Time News Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admins.index') }}">Admins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
        </li>

        <li class="user">
            <img src="{{asset('admin/images/avatar.png')}}">
            <p class="username">Ahmed Elmasry</p>
        </li>

    </ul>
  </div>
</nav>
