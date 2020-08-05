<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-12 p-0">
                		<div class="card p-4 mb-4 d-flex justify-content-between align-items-center">
                			<a class="btn btn-primary pull-left m-2" data-toggle="modal" data-target="#modal_new_order">Nueva Orden</a>

                			<div>
                				<!-- <a href="devolucion" class="mr-2 text-white pt-1 pb-1 pr-2 pl-2" style="background: #ef5350; border-radius: 6px; font-size: 12px; font-weight: bold;">Devolución de producto</a> -->
                				<a href="historialventas" class="mr-2 text-white pt-1 pb-1 pr-2 pl-2" style="background: #3F729B; border-radius: 6px; font-size: 12px; font-weight: bold;">Historial de órdenes</a>
                			</div>

                		</div>
                	</div>	
                </div>

                <div class="row">
                    <div class="content">
                        <form action="consultas/new_order.php">
                            <div class="container-fluid">
                                <div class="row">

                                    <!-- Datos Paciente  -->

                                    <div class="col-md-6 grey-background pull-left form-interno">
                                        <h5><strong>Datos Paciente:</strong></h5>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nombre">Nombre:</label>
                                                <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="telefono">Teléfono/Celular:</label>
                                                <input maxlength="100" class="form-control" type="text" name="telefono" id="telefono" autocomplete="off" required>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="dni">DNI:</label>
                                                <input maxlength="100" class="form-control" type="text" name="dni" id="dni" autocomplete="off" required>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="obra_social">Obra Social:</label>
                                                <input maxlength="100" class="form-control" type="text" name="obra_social" id="obra_social" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fin datos Paciente -->

                                    <!-- Datos receta  -->

                                    <div class="col-md-6 grey-background pull-right form-interno">
                                        <h5><strong>Datos Receta:</strong></h5>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="doctor">Doctor:</label>
                                                <input maxlength="100" class="form-control" type="text" name="doctor" id="doctor" required>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="fecha_receta">Fecha de receta:</label>
                                                <input maxlength="100" class="form-control" type="date" name="fecha_receta" id="fecha_receta" autocomplete="off" required>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="patologia">Patología:</label>
                                                <input maxlength="100" class="form-control" type="text" name="patologia" id="patologia" autocomplete="off" required>
                                            </div>
                                
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="graduacion">Graduación OD-OI:</label>
                                                <input maxlength="100" class="form-control" type="number" name="graduacion" id="graduacion" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fin datos receta  -->
                                    
                                </div>
                            </div>
                        </form>
                        <div class="output_message"></div>
                        <div class="footer">
                            <div class="stats">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

<?php include 'views/footer.php' ?>
<?php include 'modals/modal_new_order.php' ?>
<?php include 'modals/modal_add_paciente_ajax.php' ?>

<!-- Scripts Ordenes -->
<?php include 'scripts/ordenes.php' ?>


