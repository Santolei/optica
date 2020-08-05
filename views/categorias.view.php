<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_categoria_ajax">Agregar categoría</a>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><strong>Categorias</strong></h4>
                            </div>
                            <div class="content">
                                <table style="width:100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_categorias">
                                <thead class="tabla-thead white-text">
                                    <th>ID</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Editar</th>
                                    <th class="text-center">Borrar</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <tr>
                                            <td><?php echo $categoria['id_categoria'] ?></td>
                                            <td class="text-center"abbr=""><?php echo $categoria['nombre'] ?></td>
                                            <td class="text-center"><a href="editar_categoria.php?id=<?php echo $categoria['id_categoria'] ?>"><i class="fa fa-pencil"></i></a></td>
                                            <td class="text-center"><a data-toggle="modal" data-target="#modalConfirmDelete<?php echo $categoria['id_categoria']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                                        </tr>
                                        <?php include "modals/modal_borrar_categoria.php" ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Ultima actualización: 20/04/2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_marca_ajax">Agregar marca</a>
                </div>

                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><strong>Marcas</strong></h4>
                            </div>
                            <div class="content">
                                <table style="width:100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_categorias">
                                <thead class="tabla-thead white-text">
                                    <th>ID</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Editar</th>
                                    <th class="text-center">Borrar</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($lista_marcas as $marca): ?>
                                        <tr>
                                            <td><?php echo $marca['id_marca'] ?></td>
                                            <td class="text-center"abbr=""><?php echo $marca['nombre'] ?></td>
                                            <td class="text-center"><a href="editar_categoria.php?id=<?php echo $marca['id_categoria'] ?>"><i class="fa fa-pencil"></i></a></td>
                                            <td class="text-center"><a data-toggle="modal" data-target="#modalConfirmDeleteMarca<?php echo $marca['id_marca']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                                        </tr>
                                        <?php include "modals/modal_borrar_marca.php" ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Ultima actualización: 20/04/2019
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
<?php include "modals/modal_add_categoria_ajax.php" ?>
<?php include "modals/modal_add_marca_ajax.php" ?>
<script type="text/javascript">
    $('.modal').appendTo("body");
</script>

<!-- Autofocus al abrir modal -->

<script>
    $('.modal').on('shown.bs.modal', function() {
            $(this).find('[autofocus]').focus();
    });

    // Agregando categorias por ajax

    $('#add_categoria_ajax').on('submit',function(){
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(){
                $('#modal_add_categoria_ajax').modal('hide');
                location.reload();
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });

    // Agregando marcas por ajax

     $('#add_marca_form').on('submit',function(){
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(){
                $('#modal_add_marca_ajax').modal('hide');
                location.reload();
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
</script>
