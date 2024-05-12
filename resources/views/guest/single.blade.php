@extends('layout.app')

@section('main-content')
    <h1 class="text-center py-3">{{ $events['name'] }}</h1>
    <div class="container single d-flex gap-5 justify-content-center align-items-start py-5">
        <div class="card">
            <img class="card-img-top" src="{{ $events['img'] }}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ $events['name'] }}</h4>
            </div>
            <div class="card-detail d-flex gap-4 justify-content-between px-3 py-2 border-top">
                <span>
                    <p><strong>Data:</strong> {{ $events['date'] }}</p>
                </span>
                <span>
                    <p><strong>Orari:</strong> {{ $events['hour'] }}</p>
                </span>
            </div>
        </div>
        <p class="card-text">{{ $events['decription'] }}</p>
    </div>
@endsection
