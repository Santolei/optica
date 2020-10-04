<?php require 'views/header.php' ?>
<style type="text/css">
	.form-control.error{
    	border-color: #ff3547;
    	box-shadow: 0px 0px 5px #ff3547;
	}
	label.error {
		color: #ff3547;
	}

	.valid {
		border-color: #4caf50 !important;
		box-shadow: 0px 0px 5px #4caf50 !important;
	}
	label.valid {
		color: #3c763d;
	}
    .modal-backdrop.in {
        z-index: 1;
        opacity: 0;
    }
</style>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_user">Crear nuevo usuario</a>
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_vendedor">Crear nuevo vendedor</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><strong>Usuarios</strong></h4>
                            </div>
                            <div class="content">
                                <table style="width:100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_productos">
                                    <thead class="tabla-thead white-text">
                                        <th class="sorting">ID</th>
                                        <th class="text-center sorting">Nombre</th>
                                        <th class="text-center sorting">Rol</th>
                                        <th class="text-center sorting">Editar</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuarios as $usuario): ?>
                                            <tr>
                                                <td><?php echo $usuario['id_usuario'] ?></td>
                                                <td class="text-center"><?php echo $usuario['nombre'] ?></td>
                                                <td class="text-center"><?php echo roles($usuario['rol']) ?></td>
                                                <td class="text-center"><a href="editar_usuario.php?id=<?php echo $usuario['id_usuario'] ?>"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-clock-o"></i> Ultima actualización: 20/04/2019 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VENDEDORES -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><strong>Vendedores</strong></h4>
                            </div>
                            <div class="content">
                                <table style="width:100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_productos">
                                    <thead class="tabla-thead white-text">
                                        <th class="sorting">ID</th>
                                        <th class="text-center sorting">Nombre</th>
                                        <th class="text-center sorting">Editar</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($vendedores as $vendedor): ?>
                                            <tr>
                                                <td><?php echo $vendedor['id_vendedor'] ?></td>
                                                <td class="text-center"><?php echo $vendedor['nombre'] ?></td>
                                                <td class="text-center"><a href="editar_vendedor.php?id=<?php echo $vendedor['id_vendedor'] ?>"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-clock-o"></i> Ultima actualización: 20/04/2019 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'views/footer.php' ?>
<?php include 'modals/modal_add_user.php' ?>
<?php include 'modals/modal_add_vendedor.php' ?>
<?php include 'scripts/usuarios.php' ?>