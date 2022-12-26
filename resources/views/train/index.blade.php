@extends('layouts.app')

@section('title', 'Train Stastion data')

{{-- content section --}}
@section('content')

    {{-- container --}}
    <div class="container py-4">

        {{-- section-1 --}}
        <section>
            <h1 class="text-center mb-4">Train Departure Data</h1>
            <div class="row row-cols-2 g-3">

                {{-- train iteration --}}
                @foreach ($trains as $train)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $train->departure_station }}</h5>
                                <h5 class="card-title">{{ $train->arrival_station }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $train->agency }}</h6>
                                <p class="card-text">Departure time: {{ $train->departure_time }}</p>
                                <p class="card-text">Arrival time: {{ $train->arrival_time }}</p>

                                {{-- check if the train is in time or not --}}
                                @if (!$train->in_time)
                                <p class="card-text fs-3 text-warning">Is late</p>
                                @endif

                                @if ($train->deleted)
                                    <p class="card-text fs-3 text-danger">Train deleted</p>
                                @endif
    
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /train iteration --}}
                
            </div>
        </section>
        {{-- /section-1 --}}

    </div>
    {{-- /container section --}}

@endsection
{{-- /content section --}}