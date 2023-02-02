@extends('layouts.app')

@section('content')
    <div class="container col-md-12 px-2 py-4 ">
        <div class="row flex-lg-row-reverse align-items-center py-5">
            <div class="col-lg-6">
                <img src="https://source.unsplash.com/random/850x450/?coffeeshop"
                     class="d-block mx-lg-auto img-fluid rounded-3 w-auto" alt="Bootstrap Themes" loading="lazy">
                <div class="d-flex align-content-between gap-2">
                    <div class="col-lg-4 my-3">
                        <img src="https://source.unsplash.com/random/650x350/?kopi"
                             class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="300"
                             height="500" loading="lazy">
                    </div>
                    <div class="col-lg-4 my-3">
                        <img src="https://source.unsplash.com/random/650x350/?cafe"
                             class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="300"
                             height="500" loading="lazy">
                    </div>
                    <div class="col-lg-4 my-3">
                        <img src="https://source.unsplash.com/random/650x350/?kafe"
                             class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="300"
                             height="500" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Discover the Best Cafés with Us!
                </h1>
                <p class="lead">Our website is the place to go for finding the best cafes in Batam. We've got reviews
                    and ratings for all kinds of cafés, so you can easily find the perfect spot for coffee, food, or a
                    quick snack.</p>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                    <button class="btn btn-primary btn-lg px-4 me-md-2" type="button">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-2 py-3">
        <h2 class="pb-2 border-bottom" id="CafeFeatured">Find the Perfect Cafe</h2>
        <div class="container">
            <div class="row align-content-center">
                @foreach($cafes as $cafe)
                    <div class="col-md-12 card mx-2" style="width: 18rem;">
                        <a href="{{ route('details', $cafe->id) }}" class="text-decoration-none text-dark" class="text-decoration-none">
                            <img src="https://source.unsplash.com/random/650x350/?kafe" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5>{{ $cafe->name }}</h5>
                                <p>Location : {{ $cafe->address }}  </p>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
            <div class="container text-center mt-5 pt-4">
                <p>Don't see your favorite café on the list? Submit one!</p>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Submit a Cafe
                </button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                            <h1 class="fw-bold mb-0 fs-2">Submit Cafe</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body p-5 pt-0">
                            <form action="{{ route('cafe.store') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" id="floatingInput"
                                           name="name" placeholder="Name">
                                    <label for="floatingInput">Cafe Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="city" id="floatingInput" class="form-control"
                                           placeholder="City">
                                    <label for="floatingInput">City</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="address" class="form-control" id="floatingInput"
                                           placeholder="Address">
                                    <label for="floatingInput">Address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="url" name="url" class="form-control" id="floatingInput"
                                           placeholder="Social Media">
                                    <label for="floatingInput">Social Media</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" name="phone" class="form-control" id="floatingInput"
                                           placeholder="Optional">
                                    <label for="floatingInput">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="url" class="form-control" id="floatingInput" name="website"
                                           placeholder="Website">
                                    <label for="floatingInput">Website</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <select class="form-control" name="from" id="from_date">
                                                <option value="0">Monday</option>
                                                <option value="1">Tuesday</option>
                                                <option value="2">Wednesday</option>
                                                <option value="3">Thursday</option>
                                                <option value="4">Friday</option>
                                                <option value="5">Saturday</option>
                                                <option value="6">Sunday</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select class="form-control" name="till" id="till_date">
                                                <option value="0">Monday</option>
                                                <option value="1">Tuesday</option>
                                                <option value="2">Wednesday</option>
                                                <option value="3">Thursday</option>
                                                <option value="4">Friday</option>
                                                <option value="5">Saturday</option>
                                                <option value="6">Sunday</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col mt-2">
                                        <input type="text" class="timepicker form-control" name="times">
                                    </div>
                                </div>
                                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Submit
                                </button>
                                <small class="text-muted">By clicking Submit, you're agree to the terms of use.</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--        <div class="container px-2 py-3" id="custom-cards">--}}
            {{--            <h2 class="pb-2 border-bottom" id="CafeFeatured">Find the Perfect Cafe</h2>--}}
            {{--            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">--}}
            {{--                @foreach($cafes as $cafe)--}}
            {{--                <div class="col">--}}
            {{--                    <a class="text-decoration-none" href="{{ route('details', $cafe->id) "></i>
                                    </div>}}">--}}
            {{--                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg border-0"--}}
            {{--                             id="card-cafe">--}}
            {{--                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">--}}
            {{--                                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $cafe->name }}</h3>--}}
            {{--                                <ul class="d-flex list-unstyled mt-auto">--}}
            {{--                                    <li class="me-auto">--}}
            {{--                                        <img class="rounded-circle border border-white" height="32"--}}
            {{--                                             src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"--}}
            {{--                                             width="32">--}}
            {{--                                    </li>--}}
            {{--                                    <li class="d-flex align-items-center">--}}
            {{--                                        <small class="fw-bold shadow-sm">{{ $cafe->address }}</small>--}}
            {{--                                    </li>--}}
            {{--                                </ul>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </div>--}}
            {{--                @endforeach--}}
            {{--                --}}

            {{--            </div>--}}
            {{--        </div>--}}
            @endsection

            @section('scripts')
                <script>
                    $(function () {
                        $('.timepicker').daterangepicker({
                            timePicker: true,
                            timePicker24Hour: true,
                            timePickerIncrement: 1,
                            locale: {
                                format: 'HH:mm:ss'
                            }
                        }).on('show.daterangepicker', function (ev, picker) {
                            picker.container.find(".calendar-table").hide();
                        });
                    })

                </script>
@endsection
