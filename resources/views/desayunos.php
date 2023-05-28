<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<head>
    <title>Desayunos - Salón de Eventos</title>
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

        .desayuno-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }

        .desayuno-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .desayuno-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .desayuno-item h3 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .desayuno-item p {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Desayunos - Salón de Eventos</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="desayuno-item">
                    <img src="https://www.comedera.com/wp-content/uploads/2022/12/Desayono-americano-shutterstock_2120331371.jpg" alt="Desayuno 1" class="img-fluid">
                    <h3>Desayuno Americano</h3>
                    <p>Delicioso desayuno completo con huevos revueltos, tocino, pan tostado y jugo de naranja.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desayuno-item">
                    <img src="https://mbmarcobeteta.com/wp-content/uploads/2022/04/desayuno-americano-que-es.jpg" alt="Desayuno 2" class="img-fluid">
                    <h3>Desayuno Continental</h3>
                    <p>Un desayuno ligero que incluye café, croissants recién horneados y mermelada de frutas.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desayuno-item">
                    <img src="https://www.antojoentucocina.com/wp-content/uploads/2021/04/desayuno-yogur-scaled.jpg" alt="Desayuno 3" class="img-fluid">
                    <h3>Desayuno Saludable</h3>
                    <p>Una opción nutritiva con yogur griego, frutas frescas y granola crujiente.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desayuno-item">
                    <img src="https://www.goya.com/media/3859/black-bean-quesadillas.jpg?quality=80" alt="Desayuno 4" class="img-fluid">
                    <h3>Desayuno Mexicano</h3>
                    <p>Una variedad de quesadillas, frijoles refritos, salsa picante y jugo de frutas.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desayuno-item">
                    <img src="https://previews.123rf.com/images/virginiec/virginiec1201/virginiec120100004/12046580-desayuno-franc%C3%A9s-sano-con-tostadas-mantequilla-yogurt-y-frutas-en-plato-blanco.jpg" alt="Desayuno 5" class="img-fluid">
                    <h3>Desayuno Francés</h3>
                    <p>Deléitate con croissants de mantequilla, mermeladas gourmet y café au lait.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desayuno-item">
                    <img src="https://www.sabervivirtv.com/medio/2018/07/11/smoothie-albaricoque_f6c3a3fc_798x1200.jpg" alt="Desayuno 6" class="img-fluid">
                    <h3>Desayuno Energético</h3>
                    <p>Un desayuno energizante con batidos de frutas, cereales integrales y frutos secos.</p>
                </div>
            </div>
        </div>
        
        <div class="btn-group">
            <a href="/" class="btn btn-primary mt-3">Regresar</a>
        </div>
    </div>
</body>
   
</html>