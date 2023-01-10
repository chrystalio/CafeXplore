<nav class="navbar navbar-expand-lg bg-transparent container">
    <div class="container-fluid my-lg-2">
        <a class="navbar-brand" href="{{ route('home') }}">
            <b>CafeXplore</b>
        </a>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Location</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
