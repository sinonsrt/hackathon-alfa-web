@extends('layout.template')

@section('titulo', 'Destaques')

@section('content')

<div class="row">

    @foreach($veiculos as $veiculo)

    <div class="col-md-3">
        <div class="veiculo-card-container mb-4">
            <div class="row">
                <div class="col">
                    <h3 class="veiculo-card-title">
                        {{ $veiculo->modelo }}
                    </h3>
                </div>
                <div class="col-auto medal-card">
                    <i class="{{ $veiculo->destaque ? 'fas fa-medal' : '' }}"></i>
                </div>
            </div>

            <img src="{{ $veiculo->foto }}" class="veiculo-card-image" />

            <div class="row justify-content-between">
                <div class="col-auto me-auto">
                    <h3 class="veiculo-card-price" id="price">
                        R$ {{ substr_replace($veiculo->valor, ".", "-3", "-3") }}
                    </h3>
                </div>
                <div class="col-auto">
                    <span class="badge {{$veiculo->tipo == 'Novo' ? 'bg-success' : 'bg-info'}}">{{ $veiculo->tipo }}</span>
                </div>
            </div>

            <div class="veiculo-card-description">
                <p>
                    <b>Ano:</b> {{ $veiculo->anofabricacao }}/{{ $veiculo->anomodelo }} <br>
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
