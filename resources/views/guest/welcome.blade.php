@extends('layout.app')

@section('main-content')
    <div class="pt-5 jumbotron">
        <div class="p-5 mb-4 bg-transparent rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-light">Progetto Eco-Lamber</h1>
                <p class="col-md-8 fs-4 text-light w-50">
                    Benvenuto sul nostro sito, cerca informazioni in merito al progetto di solidarietà europea Eco-Lamber,
                    una serie di incontri e di lavori pratici per la sensibilizzazione ecologica sul territorio di carate
                    brianza e frazioni che culminerà con il nostro Eco-Festival del 22 e 23 giugno, non mancate
                </p>
                <a href="{{ route('about_us') }}"><button class="btn btn-primary btn-lg" type="button">
                        Scopri di piu su di noi
                    </button></a>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="row g-3">
            @forelse($events as $key => $event)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow-sm">
                        <a href="{{ route('single', ['id' => $key]) }}"><img class="card-img-top"
                                src="https://picsum.photos/200" alt="Title" /></a>
                        <div class="card-body">
                            <h4 class="card-title">{{ $event->name }}</h4>
                            <p class="card-text">Giorno: {{ $event->date }}</p>
                            <p class="card-text">Orari: {{ $event->hour }}</p>
                        </div>
                    </div>

                </div>
            @empty
                <p>scusate ma non ci sono eventi</p>
            @endforelse

        </div>
    </div>
@endsection
