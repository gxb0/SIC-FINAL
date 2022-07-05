<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    <link rel="stylesheet" href="./css/abc.css">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">


<?php
if (!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
?>

<div class="row ">

    <div class="col-lg-12 col-sm-12 justify-content-lg-center">

        <!-- Overflow Hidden -->
        <div class="card mb-4 justify-content-center">
        <div class="card-header py-3 bg-gradient-primary text-white justify-content-center">
            <h4 class="m-0 font-weight-bold text-white justify-content-center justify-content-center">Reporte de Ventas</h4>
        </div>
        <div class="card-body justify-content-center">
            Elige el <code>lapso de tiempo</code> en el que quieres que se genere el reporte. Lo que veas aquí es lo mismo que aparecerá en él
        </div>
        <div class="row hidden-print">

            <div class="col-xs-12 col-sm-12 col-md-4 text-center">

                <div class="form-group">

                    <label for="fecha_inicio">Desde El</label>
                    <input id="fecha_inicio" type="datetime-local" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 text-center">
                <div class="form-group">
                    <label for="fecha_fin">Hasta El</label>
                    <input id="fecha_fin" type="datetime-local" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
        <div class="form-group">
            <label for="familia">Familia</label>
            <select class="form-control" name="familia" id="familia">
            </select>
        </div>
        </div>
        
        </div>

    
                                

                <div class="row">
                  
                    <div class="col-xl-4 col-lg-8">
                       <div class="card shadow mb-4">
                                                 <!-- Card Header - Dropdown -->
                            <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Detalle Por Familia de Productos</h6>
                            </div>
                                                 <!-- Card Body -->
                            <div class="card-body border-bottom-primary">
                             
    <div class="col-md-12 col-sm-12 col-md-3">
       
        <div class="table-responsive">
            <table class="table table-condensed table-bordered table-hover table-striped">
                <thead class="bg-gradient-primary text-white">
                <tr>
                    <th>Familia</th>
                    <th>Total</th>
                    <th>Utilidad</th>
                </tr>
                </thead>
                <tbody id="contenedor_tabla_por_familia">
                </tbody>
            </table>
        </div>
    </div>



                            </div>
                    </div>

                </div>

                        <div class="col-xl-8 col-sm-12 col-lg-7">
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detalles de las Ventas</h6>
                                </div>
                                <div class="card-body">
                                    <div class="col-xs-12">

                                            <div class="table-responsive" id="contenedor_tabla">

                                            </div>
                                            <br>
                                            <br>
                                </div>
                            </div>
                        </div>


                        </div>

    </div>
</div>
   
</div>
<br>
<script src="./js/reporte-ventas.js"></script>
<script src="./lib/eac.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>


<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> <!--si se quita navbar no funciona bien-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<link rel="stylesheet" href="./css/eac.css">
</body>
</html>