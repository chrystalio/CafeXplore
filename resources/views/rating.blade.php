@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   @foreach($cafes as $cafe)
                        <div class="card">
                            <div class="card-header">
                                <h3>{{ $cafe->name }}</h3>
                            </div>
                            <div class="card-body">
                                <p>{{ $cafe->address }}</p>
                                <p>{{ $cafe->city }}</p>
                                <p>{{ $cafe->phone }}</p>
                                <p>{{ $cafe->about }}</p>
                                <p>{{ $cafe->website }}</p>
                                <p>{{ $cafe->averageRating }}</p>
                            </div>
                        </div>
                        <div id="accordion">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ratings
                                  </button>
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        @foreach($cafe->rating as $rating)
                                        <li>{{ $rating->rating }}</li>
                                        <li>{{ $rating->comment }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                              </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Schedule
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    <ul>
                                        @foreach($cafe->schedule as $schedule)
                                        <li>{{ $schedule->day }}</li>
                                        <li>{{ $schedule->open }}</li>
                                        <li>{{ $schedule->close }}</li>
                                        @endforeach
                                    </ul>
                                  </div>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection