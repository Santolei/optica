<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_producto">Agregar producto</a>
                    <a class="btn btn-primary m-2" href="categorias">Categorías</a>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Inventario</h4>
                            </div>
                            <div class="content">
                                <div class="table-responsive">
                                    <table style="width: 100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_productos">
                                        <thead class="tabla-thead white-text">
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Categoría</th>
                                            <th>Material</th>
                                            <th>Editar</th>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>

                                <div class="row mb-4 d-flex">
                                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_producto">Agregar producto</a>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Ultima actualización: <?php echo $last_update ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


<?php include 'views/footer.php' ?>
<!-- include "modals/modal_edit_producto.php" -->
<?php include "modals/modal_add_producto.php" ?>
<?php include "modals/modal_add_categoria_ajax.php" ?>
<?php include "modals/modal_add_marca_ajax.php" ?>
<?php include 'modals/modal_backup.php' ?>

<!-- SCRIPTS DE INVENTARIO -->
<?php include 'scripts/inventario.php' ?>
    
