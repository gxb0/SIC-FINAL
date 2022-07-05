<?php
    if(!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
    if ($_SESSION["perfil"] == 2)//1 = admin, 2 = bodeguero, 3 = vendedor, 4 = cajero
           exit('<h1 class="text-center">Lo sentimos, solamente el administrador puede ver esta sección<br><br><i class="fa fa-hand-paper-o fa-4x"></i></h1>');
?>

<?php

$link = new PDO('mysql:host=localhost;dbname=okventa', 'root', '');

?>


<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    <link rel="stylesheet" href="./css/abc.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<div class="col-xl-12 col-lg-5">

                            <!-- Area Chart -->
                            <div class="card shadow mb-2">
                                <div class="card-header py-3 border-bottom-primary">
                                    <h6 class="m-0 font-weight-bold text-primary">Detalle Boletas del dia  <button class="bg-primary text-white"> <?php
                                    $DateAndTime = date('d-m-Y', time());
                                    echo "$DateAndTime.";
                                    ?></button></h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" id="datatable">
                                                <table class="table table-bordered" id="dataTable" >
                                                    <thead class="table-dark">
                                                    <tr>
                                                        <th>N° de Venta</th>
                                                        <th>N° de Boleta</th>
                                                        <th>Forma de Pago</th>
                                                        <th>Fecha/Hora</th>
                                                        <th>Usuario</th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>


                                                    </tr>
                                                    </tfoot>
                                                    <?php

                                                    $link = new PDO('mysql:host=localhost;dbname=okventa', 'root', '');
                                                    foreach ($link->query('SELECT * from ventas where DATE (fecha) = CURDATE() ORDER BY fecha DESC ') as $row){

                                                    ?>



                                                  


                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo $row['numero_venta'] ?></td>
                                                        <td><?php echo $row['boleta'] ?></td>
                                                        <td><?php echo $row['metodo'] ?></td>
                                                        <td><?php $originalDate = $row['fecha'];
                                                            $newDate = date("d/m/Y H:i:s", strtotime($originalDate));

                                                            echo $newDate ?></td>
                                                          <td><?php echo $row['usuario'] ?></td>
                                                         

                                                    </tr>

                                                    </tr>

                                                    <?php
                                                    }
                                                    ?>

                                                    </tbody>
                                                </table>

                                            </div>

                    </div>



<script src="./lib/eac.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>


<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> <!--si se quita navbar no funciona bien-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<link rel="stylesheet" href="./css/eac.css">
</body>

</body>
</html>