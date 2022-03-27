<!doctype html>
<html lang="en">

<head>
    <title>Iniciar Sesión ~ CodeIgniter 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/all.min.css">
    <script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-light">
    <div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-xxl-5 col-lg-5 col-md-8 col-sm-12">
            <div class="card text-white bg-dark border border-primary">
                <div class="card-header bg-primary opacity-50 text-center text-uppercase fs-4"><i class="fa-solid fa-user-lock"></i> Formulario Login</div>
                <div class="card-body">
                    <form autocomplete="off">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary text-uppercase"><i class="fa-solid fa-rocket"></i> Ingresar</button>
                        <a href="registro" class="text-light">Registro</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/all.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/additional-methods.min.js"></script>
</body>

</html>