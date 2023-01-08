@extends('layouts.app')

@section('content')
    <!--    <div class="container">-->
    <!--        <div class="px-4 py-5 my-5 text-center">-->
    <!--            <img class="d-block mx-auto mb-4" src="https://cdn-icons-png.flaticon.com/512/2935/2935413.png" alt="" width="72" height="72">-->
    <!--            <h1 class="display-5 fw-bold">Welcome to CafeXplore</h1>-->
    <!--        </div>-->
    <!--    </div>-->

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

    <!--    <div class="container px-4 py-5 mt-5">-->
    <!--        <h2 class="pb-2 border-bottom">Discover the Best Cafes with Us!</h2>-->
    <!--        <div class="row row-cols-1 row-cols-md-7 align-items-md-center g-5 py-5">-->
    <!--            <div class="d-flex flex-column align-items-start gap-2">-->
    <!--                <h2 class="fw-bold"></h2>-->
    <!--                <h5>-->
    <!--                    Our website is the place to go for finding the best cafes in Batam. We've got-->
    <!--                    reviews and ratings for all kinds of cafes, so you can easily find the perfect spot for coffee,-->
    <!--                    food, or a quick snack.-->
    <!--                    <br><br>-->
    <!--                    Use our website to search for cafes by location or type, and check out our featured section for the-->
    <!--                    top picks. It's easy to use and navigate, so you can find what you need fast.-->
    <!--                </h5>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
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
        </div>
    </div>
@endsection
