@extends('layout')

@section('main')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-12">
                <div class="card mb-3">
                    <small id="time" class="text-black">loading ...</small>
                    <div class="card-body bg-dark">
                        <div class="container p-0 ">
                            @if ($eventos == null)
                                <small class="text-secondary">Não há nada agendado para hoje!</small>
                                <small>{{ $diaHoje }}</small>
                            @else
                                <p>Eventos listados para hoje</p>
                                <hr>
                                @foreach ($eventos as $evento)
                                    <div class="row mt-2">
                                        <div class="col-10">
                                            <h5 class="text-start text-info">{{ $evento->tituloEvento }}</h5>
                                            <h6 class="text-start text-secondary">Início: <u>{{ $evento->horaInicio }}</u>
                                                Fim:
                                                <u>{{ $evento->horaFim }}</u> - <small>{{ $evento->data }}</small>
                                            </h6>
                                        </div>
                                        <div class="col-2">
                                            <form method="post" action="/events/{{ $evento->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger btn-sm">X</button>
                                            </form>
                                        </div>
                                        <div class="col-auto">
                                            <p style="text-align: justify">
                                                {{ $evento->descricaoEvento }}
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
