@extends('layouts.app')

@section('styles')
    <style>
        .rating {
            --dir: right;
            --fill: gold;
            --fillbg: rgba(100, 100, 100, 0.15);
            --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
            --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
            --stars: 5;
            --starsize: 3rem;
            --symbol: var(--star);
            --value: 1;
            --w: calc(var(--stars) * var(--starsize));
            --x: calc(100% * (var(--value) / var(--stars)));
            block-size: var(--starsize);
            inline-size: var(--w);
            position: relative;
            touch-action: manipulation;
            -webkit-appearance: none;
        }

        [dir="rtl"] .rating {
            --dir: left;
        }

        .rating::-moz-range-track {
            background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
            block-size: 100%;
            mask: repeat left center/var(--starsize) var(--symbol);
        }

        .rating::-webkit-slider-runnable-track {
            background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
            block-size: 100%;
            mask: repeat left center/var(--starsize) var(--symbol);
            -webkit-mask: repeat left center/var(--starsize) var(--symbol);
        }

        .rating::-moz-range-thumb {
            height: var(--starsize);
            opacity: 0;
            width: var(--starsize);
        }

        .rating::-webkit-slider-thumb {
            height: var(--starsize);
            opacity: 0;
            width: var(--starsize);
            -webkit-appearance: none;
        }

    </style>

@endsection

@section('content')
    <div class="container col-md-12 px-2 py-4 my-4">
        <div class="row">
            <div class="col-md-8">
                <img alt="" class="img-fluid rounded-4" src="https://source.unsplash.com/random/650x400/?barista">
            </div>
            <div class="col-md-4">
                <h2 class="my-3">{{ $cafe->name }}</h2>
                <p>City : {{ $cafe->city }}</p>
                <p>Alamat : {{ $cafe->address }}</p>
                <p>Social Media : <a href="{{ $cafe->social_media }}">{{ $cafe->social_media }}</a></p>
                <p>Phone : {{ $cafe->phone }}</p>
                <p>Jadwal : {{ $cafe->from }} - {{ $cafe->till }} ({{ $cafe->open . ' - ' . $cafe->close}})</p>
                <div class="d-flex fs-2">
                    @for($i = 0; $i < 5; $i++)
                        <span class="fa fa-star {{ ($i < $cafe->averageRating) ? 'checked' : '' }}"></span>
                    @endfor
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2 col-sm-6 mb-4">
                <a href="{{ route('home') }}">
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

        <div class="container px-2 py-3">
            <h2 class="pb-2 border-bottom" id="CafeFeatured">Rate This Cafe</h2>
            <div class="container px-2 py-3">
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Submit a Rating
                </button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Submit Rating</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('rating.store', $cafe->id) }}" method="post">
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                    <label class="rating-label">
                                        <strong>Rating</strong>
                                        <input
                                            name="rating"
                                            class="rating"
                                            max="5"
                                            oninput="this.style.setProperty('--value', this.value)"
                                            step="1"
                                            type="range"
                                            value="1">
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Review</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @foreach($cafe->rating as $rat)
                <div class="card my-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            Review by Anonymous
                            <div class="d-flex">
                                <div class="d-flex fs-2">
                                    @for($i = 0; $i < 5; $i++)
                                        <span class="fa fa-star {{ ($i < $rat->rating) ? 'checked' : '' }}"></span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="card-text">{{ $rat->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
