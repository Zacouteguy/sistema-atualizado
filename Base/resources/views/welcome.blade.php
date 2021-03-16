@extends('layout.main')
@section('title','SEISC EVENTOS')

@section('content')





<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>





        <main>
            <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                  <p class="alert-box success">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
            </div>
        </main>

    <div id="events-container" class="col-md-12">
    @if ($search)
    <h2>Buscando por: {{ $search }}</h2>
    <hr>
    @else
    <h2>SEISC - Lista de Eventos</h2>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
            <a class="page-link" href="#">Próximo</a>
        </li>
        </ul>
    </nav>
    <hr>
    <p class="subtitle">Veja todos os nossos eventos dos próximos dias</p>


    @endif

    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">Data do Evento: {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">Pólo: {{ $event->city }} </p>

                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        @endforeach
        @if (count($events) == 0 && $search)
        <p>OPS! SEISC informa: Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/"> Ver todos</a></p>
        @elseif (count($events) == 0)
        <p>Ops! SEISC informa: Não há eventos disponíveis.</p>
        @endif
    </div>
</div>

@endsection
