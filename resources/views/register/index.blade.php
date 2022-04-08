@extends('layout')

@section('main')
    <div class="container col-6">
        <div class="card mb-3">
            <!--<img src="../../imgs/download.jpeg" class="card-img-top" alt="...">-->
            <small id="time" class="text-black">loading ...</small>
            <div class="card-body bg-dark">
                <div class="container p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">

                            <form method="post">
                                @csrf
                                <div class="col-12 d-flex justify-content-end">
                                    <button class="btn btn-outline-success">Adicionar</button>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-info">Título do Evento</label>
                                    <input type="text" class="form-control" id="tituloEvento" name="tituloEvento"
                                        placeholder="Comprar um bolo">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-info">Description</label>
                                    <textarea class="form-control" id="descricaoEvento" name="descricaoEvento" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-info">Data do Evento</label>
                                    <input type="date" class="form-control" id="dataEvento" name="dataEvento">
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <label class="form-label text-info">Hora Inicio</label>
                                        <input type="time" class="form-control" id="horaInicio" name="horaInicio">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label text-info">Hora Fim</label>
                                        <input type="time" class="form-control" id="horaFim" name="horaFim">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
