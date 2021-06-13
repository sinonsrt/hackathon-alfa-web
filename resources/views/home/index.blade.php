@extends('layout.template')

@section('titulo', 'Destaques')

@section('content')

<div class="row">

    @foreach($veiculos as $veiculo)

    <div class="col-md-3">
        <div class="veiculo-card-container mb-5">
            <h3 class="veiculo-card-title">
                GOLF 1.8 4P
            </h3>

            <img src="https://hackaton-img.s3.us-east-2.amazonaws.com/1623524727214_12057.jpeg" class="veiculo-card-image" />

            <h3 class="veiculo-card-price">
                R$ 72.900,00
            </h3>

            <div class="veiculo-card-description">
                <p>
                    <b>Marca:</b> Volksvagen <br>
                    <b>Cor:</b> Branco <br>
                    <b>Opcionais:</b> vidro elétrico, direção hidráulica, ar condicionado, limpador traseiro <br>
                </p>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
