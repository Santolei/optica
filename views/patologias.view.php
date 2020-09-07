<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row mb-4 d-flex">
                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_patologia_ajax">Agregar patología</a>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><strong>Patologías</strong></h4>
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
                                    <?php foreach ($patologias as $patologia): ?>
                                        <tr>
                                            <td><?php echo $patologia['id_patologia'] ?></td>
                                            <td class="text-center"abbr=""><?php echo $patologia['titulo'] ?></td>
                                            <td class="text-center"><a href="editar_patologia.php?id=<?php echo $patologia['id_patologia'] ?>"><i class="fa fa-pencil"></i></a></td>
                                            <td class="text-center"><a data-toggle="modal" data-target="#modalConfirmDelete<?php echo $patologia['id_patologia']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                                        </tr>
                                        <?php include "modals/modal_borrar_patologia.php" ?>
                                    <?php endforeach ?>
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
<?php include "modals/modal_add_patologia_ajax.php" ?>
<script type="text/javascript">
    $('.modal').appendTo("body");
</script>

<!-- Autofocus al abrir modal -->

<script>
    $('.modal').on('shown.bs.modal', function() {
            $(this).find('[autofocus]').focus();
    });

    // Agregando categorias por ajax

    $('#add_patologia_ajax').on('submit',function(){
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(){
                $('#modal_add_patologia_ajax').modal('hide');
                location.reload();
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });

</script>
