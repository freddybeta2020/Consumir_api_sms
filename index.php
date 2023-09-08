<!doctype html>
<html lang="es">

<head>
    <title>Envio | SMS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="./js/jquery-3.7.0.min.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="icon" type="image/png" href="./img/sms-icon-simple-vector-18114576.jpg">

</head>

<body>
    <header class="header">
        <div class="header-content">
            <h1>Envio SMS</h1>
        </div>
    </header>
    <main>
        <div class="row justify-content-center" id="main">
            <div class="col-lg-6">
                <div class="card" id="card">
                    <div class="card-body">
                        <h5 class="card-title">Envio SMS</h5>
                        <form method="POST" id="formulario">
                            <div class="mb-3">
                                <label for="numeroCelular" class="form-label">Número Celular</label>
                                <input type="tel" class="form-control" id="numeroCelular" placeholder="Ej: 3012345678" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="3" placeholder="Escribe tu mensaje aquí" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btn_enviar">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-11 py-3 bg-dark text-white text-center">
        &copy; 2023 Concept BPO. Todos los derechos reservados.
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
</body>

</html>