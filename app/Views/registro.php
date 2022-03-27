<!doctype html>
<html lang="en">

<head>
    <title>Registro ~ CodeIgniter 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/all.min.css">
    <script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-light">
    <div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-xxl-5 col-lg-5 col-md-8 col-sm-12">
            <div class="card text-white bg-dark border border-success">
                <div class="card-header bg-success opacity-75 text-center text-uppercase fs-4"><i class="fa-solid fa-address-card"></i> Formulario Registro</div>
                <div class="card-body">
                    <form id="formRegistro" method="post" autocomplete="off">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="nombre" class="form-control" name="nombre" id="nombre" minlength="4" maxlength="12" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" minlength="6" maxlength="16" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="password2" name="password2" minlength="6" maxlength="16" required>
                        </div>
                        <button id="btn_registrar" type="submit" class="btn btn-success text-uppercase"><i class="fa-solid fa-rocket"></i> Registro</button>
                        <a href="login" class="text-light">Login</a>
                    </form>
                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="regUsuarioToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header bg-dark text-light">
                                <i class="fa-solid fa-address-card rounded me-2"></i>
                                <strong class="me-auto">Registro completado!</strong>
                                <small>Exito!</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div id="msjToastSuccess" class="toast-body bg-dark text-success">
                                Te has registrado correctamente.
                            </div>
                        </div>
                    </div>
                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="errorUsuarioToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header bg-dark text-light">
                                <i class="fa-solid fa-address-card rounded me-2"></i>
                                <strong class="me-auto">Registro Fallido!</strong>
                                <small>Fallo al registrarse!</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div id="msjToastError"class="toast-body bg-dark text-danger">
                                No te has podido registrar.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/all.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/registro.js"></script>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>
</body>

</html>