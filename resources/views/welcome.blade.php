<!DOCTYPE html>
<html>

<head>
    <title>EVENTOS DANYSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <style>
        body {
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .contact-info {
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .image-container {
            margin-bottom: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-eventos {
            background-color: rgb(35, 37, 129);
            border-color: rgb(35, 37, 129);
        }

        .btn-alquiler {
            background-color: rgb(35, 37, 129);
            border-color: rgb(35, 37, 129);
        }

        .btn-desayunos {
            background-color: rgb(35, 37, 129);
            border-color: rgb(35, 37, 129);
        }
    </style>
</head>

<body>
    <div class="container">
       

        <h1>BIENVENIDOS</h1>
        <h1>EVENTOS DANYSA</h1>

        <div class="image-container">
            <img src="https://scontent.fpso2-1.fna.fbcdn.net/v/t39.30808-6/300402282_364711159207373_6003192772673928989_n.png?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=C2s6TQpakIQAX88k7vl&_nc_ht=scontent.fpso2-1.fna&oh=00_AfAEz0vvCD4HeqMbMG9580OaKtdtUvmkN8D6TkNBiuC_kA&oe=6475F156"
                alt="Evento DanySa Image">
        </div>

        <div class="btn-group">
            <a href="/eventos" class="btn btn-primary btn-lg btn-eventos">Ir a Eventos</a>
        </div>
        <div class="btn-group">
            <a href="/alquiler" class="btn btn-primary btn-lg btn-alquiler">Ir a Alquiler</a>
        </div>
        <div class="btn-group">
            <a href="/desayunos" class="btn btn-primary btn-lg btn-desayunos">Ir a desayunos</a>
        </div>
        
    </div>
</body>

</html>
