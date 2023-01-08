@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('cafe.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" id="name">
                        <input type="text" name="address" id="address">
                        <input type="text" name="city" id="city"><br>
                        <input type="text" name="phone" id="phone"><br>

                        @php
                            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                        @endphp
                        @for($i = 0; $i < 7; $i++)
                            <label for="day">{{ $days[$i] }}</label>
                            <input type="text" class="time" name="times[]">
                        @endfor

                        <button type="submit">submit</button>
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
            $('.time').daterangepicker({
                    timePicker : true,
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
