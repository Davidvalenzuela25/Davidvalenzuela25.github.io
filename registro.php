<?php
include_once 'conexion.php';
$objeto=new Conexion();
$conexion=$objeto->Conectar();

$consulta="SELECT * FROM alumnos";
$resultado=$conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Cargar el CSS de Boostrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
          integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="//www.templatemonster.com/assets/css/demo-7498d888d7421dc36941.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary">
            <img src="img/logo2.png" class="me-3" alt="..." height="100">
            <!-- Frida Kahlo--></h1>
    </a>
    <!--Menu-->
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="index.html" class="nav-item nav-link active">Inicio</a>
            <a href="classes.html" class="nav-item nav-link">Classes</a>
            <a href="contact.html" class="nav-item nav-link">Contactanos</a>
            <a href="about.html" class="nav-item nav-link">Nosotros</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<br>
<!-- Navbar End -->
<main role="main" class="container">
    <div class="hscroll">

        <div class="row">
            <div class="col-12">
                <h1>Registro</h1>

                <div class="table-responsive">
                    <table width="100%" cellspacing="0" cellpadding="6" class="content-table">
                        <colgroup>
                            <col style="width: 2%" />
                            <col style="width: 4%" />
                            <col style="width: 4%" />
                        </colgroup>

                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Asistencia</th>
                            <th>Notas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($data as $dat){
                        ?>
                        <tr>
                            <td><?php $dat['Id']?></td>
                            <td><?php $dat['Nombre']?></td>
                            <td><?php $dat['Asistencia']?></td>
                            <td><?php $dat['Notas']?></td>
                        </tr>
                        <?php
                        }
                        ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="form-group text-center">
    <a href="index.html">
        <input type="submit" value="Salir" class="btn btn-danger" />
    </a>

    <input type="submit"  value="Actualizar" class="btn btn-primary" />
</div>



</body>

</html>
