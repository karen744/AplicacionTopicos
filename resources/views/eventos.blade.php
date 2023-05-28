<!DOCTYPE html>
<html>

<head>
    <title>Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .eventos-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }
        .btn-group {
            margin-top: 20px;
        }

        .evento {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .evento img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Salón de Eventos</h1>

        <div class="eventos-container">
            <div class="evento">
                <img src="https://i.pinimg.com/originals/7d/a6/91/7da691d29d8291aba71cf1c981777180.jpg" alt="Evento 1">
                <h3 class="h5">Bodas</h3>
                <p>Celebra tu boda en nuestro elegante salón de eventos.</p>
            </div>
            <div class="evento">
                <img src="https://ideasdeeventos.com/wp-content/uploads/2014/12/salones-de-fiestas-ideas-tu-cumpleanos.jpg" alt="Evento 2">
                <h3 class="h5">Fiestas de Cumpleaños</h3>
                <p>Celebra tu cumpleaños en un ambiente divertido y festivo.</p>
            </div>
            <div class="evento">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZRZdQ45xeGh_PF41FvuC2cfeKKpBE2UDcX0e_iek6Ih0esYErTnv24eEqGlaqrD9hBOI&usqp=CAU alt="Evento 3">
                <h3 class="h5">Conferencias</h3>
                <p>Organiza conferencias y eventos empresariales en nuestro salón.</p>
            </div>
            <div class="evento">
                <img src="https://eventossocialesbarrera.com/Multimedia/Eventos/Servicios/Pista-BC.jpg" alt="Evento 4">
                <h3 class="h5">Fiestas de Graduación</h3>
                <p>Celebra tu graduación con estilo en nuestro salón.</p>
            </div>
            <div class="evento">
                <img src="https://www.benidormdmc.com/wp-content/uploads/2019/04/decoracion-de-espacios-para-eventos.jpg" alt="Evento 5">
                <h3 class="h5">Eventos Culturales</h3>
                <p>Disfruta de conciertos y eventos culturales en nuestro salón.</p>
            </div>
            <div class="evento">
                <img src="https://www.tipsempresariales.com/uploads/1/3/1/4/131438314/published/583680058.jpg?1608038648" alt="Evento 6">
                <h3 class="h5">Networking</h3>
                <p>Participa en eventos presenciales de Networking.</p>
            </div>
        </div>
        <div class="btn-group">
        <a href="/" class="btn btn-primary mt-3">Regresar</a>
        </div>
        
        <div class="btn-group">
        <a href="/catalogo" class="btn btn-primary mt-3">Ir a Catalogo</a>
        </div>
    </div>
</body>

</html>
