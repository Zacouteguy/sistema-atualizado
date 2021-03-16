@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>CEISC | Painel Administrativo</h1><hr><br><h3></h3>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
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
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do Evento</th>

                <th scope="col">Ações </th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>

                    <td>
                        <a href="/events/edit/{{ $event->id }}" class="btn btn-outline-success edit-btn">Editar</a>

                        <form action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger delete-btn"> Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>SEISC Informa: Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>

@endsection
