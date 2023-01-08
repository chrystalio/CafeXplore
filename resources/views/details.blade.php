<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>CafeXplore</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Libre+Franklin:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Palanquin:wght@400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="mx-lg-5 px-lg-5">
<nav class="navbar navbar-expand-lg bg-transparent container">
    <div class="container-fluid my-lg-2">
        <a class="navbar-brand" href="#">
            <b>CafeXplore</b>
        </a>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link active" href="#">Home</a>
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
<main>
    <div class="container col-md-12 px-2 py-4 my-4">
        <div class="row">
            <div class="col-md-8">
                <img alt="" class="img-fluid rounded-4" src="https://source.unsplash.com/random/650x400/?barista">
            </div>
            <div class="col-md-4">
                <h2 class="my-3">Kopikustik</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida
                    pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.
                    Mauris ultricies, justo eu convallis placerat, felis enim.
                </p>
                <div class="d-flex fs-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2 col-sm-6 mb-4">
                <a href="#">
                    <img alt="" class="img-fluid rounded-4" src="https://source.unsplash.com/random/600x400/?cafe">
                </a>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <a href="#">
                    <img alt="" class="img-fluid rounded-4" src="https://source.unsplash.com/random/600x400/?coffee">
                </a>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <a href="#">
                    <img alt="" class="img-fluid rounded-4"
                         src="https://source.unsplash.com/random/600x400/?coffeeshop">
                </a>
            </div>
        </div>
    </div>
</main>
<footer class="py-4">
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a class="nav-link px-2 text-muted" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-muted" href="#">Featured</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-muted" href="#">Location</a></li>
            </ul>
            <p class="text-center text-muted">Created with ❤️ By CafeXplore </p>
        </footer>
    </div>
</footer>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>
    const currentYear = new Date().getFullYear();
</script>
</body>
</html>