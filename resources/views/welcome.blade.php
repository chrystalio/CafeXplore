@extends('layouts.app')

@section('content')
    <div class="container col-md-12 px-2 py-4 ">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-12 col-lg-6">
                <img alt="Hero" class="d-block mx-lg-auto img-fluid"
                     height="550" loading="lazy" src="https://cdn-icons-png.flaticon.com/512/4171/4171640.png"
                     width="550">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Discover the Best Cafes with Us!
                </h1>
                <p class="lead">Our website is the place to go for finding the best cafes in Batam. We've got reviews
                    and ratings for all kinds of cafes, so you can easily find the perfect spot for coffee, food, or a
                    quick snack.</p>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                    <button class="btn btn-primary btn-lg px-4 me-md-2" type="button">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-2 py-3" id="custom-cards">
        <h2 class="pb-2 border-bottom" id="CafeFeatured">Find the Perfect Cafe</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <a class="text-decoration-none" href="{{ route('details') }}">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg border-0"
                         id="card-cafe">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Solusi Cafe</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img class="rounded-circle border border-white" height="32"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         width="32">
                                </li>
                                <li class="d-flex align-items-center">
                                    <small class="fw-bold shadow-sm">Batam Center</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a class="text-decoration-none" href="{{ route('details') }}">
                    <div class="card card-cover
                 ah-100 overflow-hidden text-bg-dark rounded-4 shadow-lg border-0" id="card-cafe2">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Espresso Yourself</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img class="rounded-circle border border-white" height="32"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         width="32">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <small class="fw-bold shadow-sm">Batu Aji</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="{{ route('details') }}">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg border-0"
                         id="card-cafe3">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Brew-tique</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img class="rounded-circle border border-white" height="32"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         width="32">
                                </li>
                                <li class="d-flex align-items-center">
                                    <small class="fw-bold shadow-sm">Bengkong Laut</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container text-center mt-5 pt-4">
                <p>Don't see your favorite café on the list? Submit one!</p>
                <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal">Submit a Cafe</button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable  ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Submit Cafe</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/cafe" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="cafe_name" class="form-label">Cafe Name</label>
                                    <input type="text" class="form-control" id="cafe_name" name="cafe_name">
                                </div>
                                <div class="mb-3">
                                    <label for="city_name" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city_name" aria-describedby="city_name">
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Instagram/Maps link</label>
                                    <input type="url" class="form-control" id="link">
                                </div>
                                <div class="mb-3">
                                    <label for="numberphone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="numberphone">
                                </div>
{{--                                <div class="mb-3">--}}
{{--                                    @for($i = 0; $i < 7; $i++)--}}
{{--                                        <input type="text" name="time[]">--}}
{{--                                    @endfor--}}
{{--                                </div>--}}

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" >Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
