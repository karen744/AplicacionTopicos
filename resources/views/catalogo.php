<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<head>
    <title>Catálogo de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .catalogo-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }

        .catalogo-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .catalogo-item h3 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .catalogo-item p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .catalogo-item .precio {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Catálogo de Eventos</h1>

        <div class="catalogo-container">
            <div class="catalogo-item">
                <h3>Boda</h3>
                
                <p class="precio">$100</p>
            </div>
            <div class="catalogo-item">
                <h3>Fiesta de cumpleaños</h3>
    
                <p class="precio">$150</p>
            </div>
            <div class="catalogo-item">
                <h3>Conferencia</h3>
                
                <p class="precio">$200</p>
            </div>
            <div class="catalogo-item">
                <h3>Fiesta de graduacion</h3>
                
                <p class="precio">$120</p>
            </div>
            <div class="catalogo-item">
                <h3>Eventos culturales</h3>
                
                <p class="precio">$180</p>
            </div>
            <div class="catalogo-item">
                <h3>Networking</h3>
                
                <p class="precio">$250</p>
            </div>
        </div>
        <div class="btn-group">
            <a href="/" class="btn btn-primary mt-3">Volver Inicio</a>
        </div>
        <div class="btn-group">
            <a href="/eventos" class="btn btn-primary mt-3">Regresar</a>
        </div>
    </div>
</body>
   
</html>