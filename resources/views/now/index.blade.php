@extends('layout')
@section('main')
    <div class="container col-6">
        <div class="card mb-3">
            <div class="card-body bg-dark">
                <div class="container p-0">
                    <div class="row justify-content-center">
                        <div class="col-md col-lg-6">
                            <h6 class="text-info">Hora Certa</h6>
                            <hr>
                            <p id="time">loading ...</p>
                            <small class="text-secondary">Zone time: {{ $fuso }}</small>

                        </div>
                        <div class="col-md col-lg-6">
                            <h6 class="text-info">Clima</h6>
                            <hr>
                            <p>{{ $clima }}</p>
                            <small class="text-secondary">{{ $city }} - {{ $region }}</small><br>
                        </div>
                    </div>
                    <p id="time" class="m-0 mt-2">{{ $diaHoje }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
