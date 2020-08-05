<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content">

            <div class="container-fluid">

                <div class="card p-4 ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <h4 class="title">Configuración</h4>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="backups" class="btn btn-danger d-flex align-items-center pull-right mb-4" style="width: 250px" style="cursor:pointer"><h6 class="mr-2">Backup de base de datos</h6><i class="fa fa-cloud-download fa-2x"></i></a>
                        </div>
                    </div>
                    
                </div>
                

            </div>

                
        </div>

<?php include 'views/footer.php' ?>
<?php include 'modals/modal_config_valor_dolar.php' ?>
<?php include 'modals/modal_config_pagos.php' ?>
<?php include 'modals/modal_config_porcentaje_ganancia.php' ?>

<!-- Scripts Configuración -->

<?php include 'scripts/configuracion.php' ?>

