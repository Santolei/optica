<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content">

            <div class="container-fluid">

                <div class="card">
                    <!--Grid column-->
                    <div class="col-12 p-4">
                
                        <!-- ERROR -->
                        <div class="text-center modal-danger" style="box-shadow: none; max-width: 550px">
                            
                          <i class="fa fa-times fa-5x animated bounceIn"></i>
                          <h4 class="animated fadeIn m-0">Lo siento, no tienes permiso para ver este contenido, si crees que es un error por favor contacta al soporte.</h4>
                          <img src="assets/img/error.png" class="img-fluid animated jello" style="max-width: 55%; max-height: 55%;">
                        </div>
                        
                </div>
            </div>
        </div>
    </div>

<?php include 'views/footer.php' ?>

