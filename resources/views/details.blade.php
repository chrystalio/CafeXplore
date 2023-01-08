@extends('layouts.app')

@section('content')
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
@endsection