<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_tratamiento_ajax">Agregar tratamiento</a>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><strong>Tratamientos</strong></h4>
                            </div>
                            <div class="content">
                                <table style="width:100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_categorias">
                                <thead class="tabla-thead white-text">
                                    <th>ID</th>
                                    <th class="text-center">Título</th>
                                    <th class="text-center">Editar</th>
                                    <th class="text-center">Borrar</th>
                                </thead>
                                <tbody>
                                    <?php if (isset($tratamientos)): ?>
                                        <?php foreach ($tratamientos as $tratamiento): ?>
                                            <tr>
                                                <td><?php echo $tratamiento['id_tratamiento'] ?></td>
                                                <td class="text-center"><?php echo $tratamiento['titulo'] ?></td>
                                                <td class="text-center"><a href="editar_tratamiento.php?id=<?php echo $tratamiento['id_tratamiento'] ?>"><i class="fa fa-pencil"></i></a></td>
                                                <td class="text-center"><a data-toggle="modal" data-target="#modalConfirmDelete<?php echo $tratamiento['id_tratamiento']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                                            </tr>
                                            <?php include "modals/modal_borrar_tratamiento.php" ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                    
                                </tbody>
                            </table>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Ultima actualización: 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include 'views/footer.php' ?>
<?php include "modals/modal_add_tratamiento_ajax.php" ?>
<script type="text/javascript">
    $('.modal').appendTo("body");
</script>

<!-- Autofocus al abrir modal -->

<script>
    $('.modal').on('shown.bs.modal', function() {
            $(this).find('[autofocus]').focus();
    });

    // Agregando categorias por ajax

    $('#add_tratamiento_ajax').on('submit',function(){
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(){
                $('#modal_add_tratamiento_ajax').modal('hide');
                location.reload();
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });

</script>
