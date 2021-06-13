@extends('layout.template')

@section('titulo', 'Destaques')

@section('content')

<div class="row">

    <div class="col-md-3">
        <div class="veiculo-card-container">
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

    <div class="col-md-3">
        <div class="veiculo-card-container">
            <h3 class="veiculo-card-title">
                CRUZE 2020 2.0 4P
            </h3>

            <img src="https://hackaton-img.s3.us-east-2.amazonaws.com/1623523767618_13069.jpeg" class="veiculo-card-image" />

            <h3 class="veiculo-card-price">
                R$ 99.900,00
            </h3>

            <div class="veiculo-card-description">
                <p>
                    <b>Marca:</b> Chevrolet <br>
                    <b>Cor:</b> Preto <br>
                    <b>Opcionais:</b> vidro elétrico, direção hidráulica, ar condicionado, limpador traseiro <br>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="veiculo-card-container">
            <h3 class="veiculo-card-title">
                FUSION 2.0 FLEX 4P
            </h3>

            <img src="https://hackaton-img.s3.us-east-2.amazonaws.com/1623530268366_16570.jpeg" class="veiculo-card-image" />

            <h3 class="veiculo-card-price">
                R$ 109.900,00
            </h3>

            <div class="veiculo-card-description">
                <p>
                    <b>Marca:</b> Ford <br>
                    <b>Cor:</b> Prata <br>
                    <b>Opcionais:</b> vidro elétrico, direção hidráulica, ar condicionado, limpador traseiro <br>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="veiculo-card-container">
            <h3 class="veiculo-card-title">
                JETTA 2.0 FLEX 2P
            </h3>

            <img src="https://firebasestorage.googleapis.com/v0/b/cherry-veiculos.appspot.com/o/jetta_001.jpeg?alt=media&token=ca0823ec-7b3d-4a7e-970b-64ee61a430cb" class="veiculo-card-image" />

            <h3 class="veiculo-card-price">
                R$ 134.900,00
            </h3>

            <div class="veiculo-card-description">
                <p>
                    <b>Marca:</b> Volksvagen <br>
                    <b>Cor:</b> Prata <br>
                    <b>Opcionais:</b> vidro elétrico, direção hidráulica, ar condicionado, limpador traseiro <br>
                </p>
            </div>
        </div>
    </div>

</div>

@endsection
