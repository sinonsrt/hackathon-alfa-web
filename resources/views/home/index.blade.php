@extends('layout.template')

@section('titulo', 'Destaques')

@section('content')

<div class="row">

    @foreach($veiculos as $veiculo)

    <div class="col-md-3">
        <div class="veiculo-card-container mb-5">
            <h3 class="veiculo-card-title">
                {{ $veiculo->modelo }}
            </h3>

            <img src="{{ $veiculo->foto }}" class="veiculo-card-image" />

            <h3 class="veiculo-card-price">
                R$ {{ $veiculo->valor }}
            </h3>

            <div class="veiculo-card-description">
                <p>
                    <b>Marca:</b> {{ $veiculo->marca }} <br>
                    <b>Cor:</b> {{ $veiculo->cor }} <br>
                    <b>Opcionais:</b> {{ $veiculo->opcionais }}
                </p>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
