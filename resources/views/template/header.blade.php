<header id="header">
    {{-- todo Navbar --}}
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/iconmjm.png" alt="icon">
            </a>
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('comment.index')}}">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('portofolio.index')}}">Portofolio</a>
                    </li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-primary">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    {{-- todo Navbar --}}
</header>
