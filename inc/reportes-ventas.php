<?php
if (!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
?>


<div class="row visible-print-block">
    <h1 class="text-center">Reporte sobre ventas</h1>
</div>
<div class="row hidden-print">
    <div class="col-xs-12">
        <p class="h5 text-justify">Elige el lapso de tiempo en el que quieres que se genere el reporte. Lo que veas aquí
            es lo mismo que aparecerá en él.<br>
        </p>
    </div>
</div>
<div class="row hidden-print">
    <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <div class="form-group">

            <label for="fecha_inicio">Del</label>
            <input id="fecha_inicio" type="datetime-local" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <div class="form-group">
            <label for="fecha_fin">Hasta</label>
            <input id="fecha_fin" type="datetime-local" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <div class="form-group">
            <label for="familia">Familia</label>
            <select class="form-control" name="familia" id="familia">
            </select>
        </div>
    </div>
</div>
<br>
<div class="row hidden-print">
    <div class="col-xs-12">
        <button class="btn btn-info form-control" id="generar_reporte">Generar reporte <i class="fa fa-file-pdf-o"></i>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-xs-6">
        <h2 class="text-center" hidden="hidden"><strong>Total:</strong> $<span id="mostrar_total"></span></h2>
    </div>
    <div class="col-xs-6">
        <h2 class="text-center" hidden="hidden"><strong>Utilidad:</strong> $<span id="mostrar_utilidad"></span></h2>
    </div>
</div>

<div class="row"><br>
    <div class="col-xs-12 col-sm-12 col-md-3">
        <h3 class="text-center">Por familia</h3>
        <div class="table-responsive">
            <table class="table table-condensed table-bordered table-hover">
                <thead>
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
    <div class="col-xs-12 col-sm-12 col-md-9">
        <h3 class="text-center">General</h3>
        <div id="contenedor_tabla" class="table-responsive">
        </div>
    </div>
</div>
<script src="./js/reporte-ventas.js"></script>
<!--<!DOCTYPE html>
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
<div class="col-xl-12 col-lg-5">

                                                            
  <div class="card shadow mb-2">
     <div class="card-header py-3 border-bottom-warning bg-gradient-primary">
        <h5 class="m-0 font-weight-bold text-white text-center">Ventas Realizadas en el Día</h5>
     </div>
        <div class="card-body">
          <div class="table-responsive" id="datatable">
             <table class="table table-bordered" id="dataTable" >
                <thead class="table-dark">
                   <tr>
                     <th>N° de Venta</th>
                      <th>Codigo Producto</th>
                     <th>Producto</th>
                     <th>Total</th>
                     <th>usuario</th>
                   </tr>
                </thead>
                <tfoot>
                   <tr>


                   </tr>
                </tfoot>

                     <tbody>
                        <tr>
                          <td><?php echo $row['n']?></td>
                          <td><?php echo $row['c']?></td>
                          <td><?php echo $row['p']?></td>
                          <td>$<?php echo $row['t']?></td>
                          <td><?php echo $row['u']?></td>

                        </tr>

                       </tr>


                     </tbody>
             </table>

     </div>
<script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>





<script src="vendor/chart.js/Chart.min.js"></script>



<script src="./lib/eac.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<script src="./js/reporte-ventas.js"></script>
<link rel="stylesheet" href="./css/eac.css">

-->
</body>
</html>