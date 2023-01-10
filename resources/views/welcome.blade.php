@extends('layouts.app')

@section('content')
    <div class="container col-md-12 px-2 py-4 ">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <img src="https://source.unsplash.com/random/650x400/?coffeeshop" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="700" height="300" loading="lazy">
                <div class="d-flex">
                    <div class="col-lg-6 my-3">
                        <img src="https://source.unsplash.com/random/650x400/?kopi" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6 my-3 mx-2">
                        <img src="https://source.unsplash.com/random/650x400/?cafe" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
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
    <div class="container px-2 py-3" id="custom-cards">
        <h2 class="pb-2 border-bottom" id="CafeFeatured">Find the Perfect Cafe</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            @foreach($cafes as $cafe)
            <div class="col">
                <a class="text-decoration-none" href="{{ route('details', $cafe->id) }}">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg border-0"
                         id="card-cafe">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $cafe->name }}</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img class="rounded-circle border border-white" height="32"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         width="32">
                                </li>
                                <li class="d-flex align-items-center">
                                    <small class="fw-bold shadow-sm">{{ $cafe->address }}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach


            <div class="container text-center mt-5 pt-4">
                <p>Don't see your favorite café on the list? Submit one!</p>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Submit a Cafe
                </button>
            </div>
            {{--

                buat modal nya bisa di scroll, kalau layar nya kecil form nya ketutupan di bawah

            --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable  ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Submit Cafe</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('cafe.store') }}" method="post">
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                    <label for="cafe_name" class="form-label">Cafe Name</label>
                                    <input type="text" class="form-control" id="cafe_name" name="name">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="city_name" class="form-label">City</label>
                                            <input type="text"  name="city" id="city" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" id="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Instagram/Maps link</label>
                                    <input type="url" class="form-control" id="link" name="url">
                                </div>
                                <div class="mb-3">
                                    <label for="numberphone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="numberphone">
                                    <div id="numberphone" class="form-text text-muted text-sm-start">
                                        Optional
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="website" name="website">
                                    <div id="website" class="form-text text-muted">Optional
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="#timerange">Schedule</label>
                                    <div class="row">
                                        <div class="col-md-6 mt-2">
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
                                        <div class="col-md-6">
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('.timepicker').daterangepicker({
                timePicker : true,
                timePicker24Hour : true,
                timePickerIncrement : 1,
                locale : {
                    format : 'HH:mm:ss'
                }
            }).on('show.daterangepicker', function(ev, picker) {
                picker.container.find(".calendar-table").hide();
            });
        })

    </script>
@endsection
