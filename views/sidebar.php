<?php 

// Voy a traer los datos de roles y usuarios
    require_once 'consultas/usuarios.php';

 ?>
<div class="sidebar" data-color="dark" data-image="assets/img/sidebar-3.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="dark | blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index" class="simple-text">
                    <img src="assets/img/Logo2blanco.png" alt="" class="w-100">
                </a>
            </div>

            <ul class="nav">

                <li class="<?php if (isset($active_home)){echo $active_home;}?>">
                    <a href="index">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="<?php if (isset($active_ordenes)){echo $active_ordenes;}?>">
                    <a href="ordenes">
                        <i class="pe-7s-credit"></i>
                        <p>Órdenes</p>
                    </a>
                </li>
                
                <li class="<?php if (isset($active_inventario)){echo $active_inventario;}?>">
                    <a href="inventario">
                        <i class="pe-7s-note2"></i>
                        <p>Lista Productos</p>
                    </a>
                </li>

                

                <li class="dropdown 
                <?php if ((isset($active_pacientes) or isset($active_patologias) or isset($active_tratamientos))): ?>
                    active
                <?php endif ?>
                " >
                    <a role="button" data-toggle="collapse" href="#dd" aria-expanded="false">
                        <i class="pe-7s-ribbon"></i>
                        <p>Bases de datos <span class="caret"></span></p>
                    </a>
                    <ul id="dd" style="list-style: none;" class="
                        <?php if (isset($active_pacientes) or isset($active_patologias) or isset($active_tratamientos)): ?>
                            collapse in
                        <?php else: ?>
                            collapse 
                        <?php endif ?>
                    ">
                        <li class="<?php if (isset($active_pacientes)){echo $active_pacientes;}?>">
                            <a href="pacientes">
                                <i class="pe-7s-user-female"></i>
                                <p>Pacientes</p>
                            </a>
                        </li>

                        <li class="<?php if (isset($active_patologias)){echo $active_patologias;}?>">
                            <a href="patologias">
                                <i class="pe-7s-ribbon"></i>
                                <p>Patologías</p>
                            </a>
                        </li>

                        <li class="<?php if (isset($active_tratamientos)){echo $active_tratamientos;}?>">
                            <a href="tratamientos">
                                <i class="pe-7s-note2"></i>
                                <p>tratamientos</p>
                            </a>
                        </li>
                    </ul>
                </li>


                


                <!-- Muestro esta parte del menu al administrador  -->
                <?php if ($usuario_logueado['rol'] != 1): ?>
                <?php else: ?>
                    <li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>">
                        <a href="usuarios">
                            <i class="pe-7s-users"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>    
                <?php endif ?>
                
                

                <!-- Muestro esta parte del menu al administrador  -->
                <?php if ($usuario_logueado['rol'] != 1): ?>
                <?php else: ?>
                    <li class="<?php if (isset($active_config)){echo $active_config;}?>">
                        <a href="configuracion">
                            <i class="pe-7s-config"></i>
                            <p>Configuración</p>
                        </a>
                    </li>  
                <?php endif ?>

                
            </ul>
    	</div>
    </div>