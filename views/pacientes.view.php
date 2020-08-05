<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_paciente">Nuevo paciente</a>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Pacientes</h4>
                            </div>
                            <div class="content">
                                <div class="table-responsive">
                                    <table style="width: 100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_pacientes">
                                        <thead class="tabla-thead white-text">
                                            <th>N° Paciente</th>
                                            <th>Nombre</th>
                                            <th>DNI</th>
                                            <th>Teléfono</th>
                                            <th>Obra Social</th>
                                            <th>Editar</th>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


<?php include 'views/footer.php' ?>
<!-- include "modals/modal_edit_producto.php" -->
<?php include "modals/modal_add_paciente.php" ?>

<!-- SCRIPTS DE INVENTARIO -->
<?php include 'scripts/pacientes.php' ?>
    
