<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content printable" style="padding-top: 15px;">
            <div class="header-comprobante d-flex justify-content-between align-items-center pb-4 mb-4">
                <!-- <div class="info-comprobante">
                    <p><strong>Paciente:</strong> <?php echo $nombre; ?></p> 
                    <p><strong>N° de trabajo:</strong> <?php echo $id_orden; ?></p>
                    
                </div>
                <div class="info-comprobante">
                    <img src="assets/img/Logo1chico.png" alt="" style="float: left;">
                    <div style="float: right;" class="ml-3">
                        <p><strong>Óptica-Foto El Poeta</strong></p>
                        <p>Juan de Videla 79 - Merlo, San Luis</p>
                        <p>Tel: (02656) 475710 / 475728</p>
                    </div>
                </div> -->

                <div class="logo-comprobante">
                    <img src="assets/img/Logo2.png" alt="logo">
                </div>
                <div class="titulo-comprobante pr-4 pl-4 d-flex flex-column justify-content-center align-items-center">
                    <h4 class="m-0">
                        <strong>Orden</strong>
                    </h4>
                    <h4 class="m-0"><strong>N°</strong> <?php echo $id_orden; ?></h4>
                </div>
                <div class="info-comprobante">
                    <div style="float: right;" class="ml-3">
                        <p><strong>Óptica-Foto El Poeta</strong></p>
                        <p>Juan de Videla 79 - Merlo, San Luis</p>
                        <p>Tel: (02656) 475710 / 475728</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Comprobante Cliente 1 -->
                <div class="row mt-4 mb-4">
                    <div class="col-sm-4 pl-0 text-center"><p><strong>Fecha de entrega:</strong> 15/02/2020</p></div>
                    <div class="col-sm-4 text-center"><p><strong>Sucursal:</strong> <?php echo $sucursal; ?></p></div>
                    <div class="col-sm-4 text-center"><p><strong>Trabajo:</strong> <?php echo $trabajo; ?></p></div>
                </div>
                <div class="row bordeada p-4 mb-3">
                    
                    <div class="col-sm-6 ticket-cliente-1 mr-0 pl-0 pr-2">
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0 mr-2"><strong>Cristales:</strong></p><?php echo '$' . $cristales_precio; ?> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Armazón:<div style="visibility:hidden">.</div></strong></p><?php echo '$' . $armazon_precio; ?> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Otros:<div style="visibility:hidden">.zzz</div></strong></p><?php echo '$' . $otros_precio; ?> </div>
                    </div>

                    <div class="col-sm-6 ticket-cliente-1 mr-0 pl-4 pr-2">
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Total:<div style="visibility:hidden">z</div></strong></p><?php echo '$' . "$total"; ?> </div>
                        
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Seña:<div style="visibility:hidden">zzzz</div></strong></p><?php echo "$" . "$senia"; ?> </div>
                       <!-- Linea con input text -->
                        <div class=" total pt-2 mb-4 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>SALDO:<div style="visibility:hidden">zzzz</div></strong></p><?php echo "<strong>" . "$" . $saldo . "</strong>" ?> </div>
                    </div>
                </div>

                <div class="row">
                    <p class="mb-0"><strong>Aclaración:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                

                <hr class="divisor">

                <!-- Comprobante local 2 -->
                <div class="row">
                    <div class="col-sm-4 pl-0"><p><strong>N° de trabajo:</strong> <?php echo $id_orden; ?>
                </p></div>
                    <div class="col-sm-4"><p><strong>Sucursal:</strong> <?php echo $sucursal; ?></p></div>
                    <div class="col-sm-4"><p><strong>Trabajo:</strong> <?php echo $trabajo; ?></p></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 pl-0"><p><strong>Fecha de entrega:</strong> 15/02/2020</p></div>

                    <div class="col-sm-4"><p><strong>Nombre:</strong> <?php echo $nombre; ?></p></div>

                    <div class="col-sm-4"><p><strong>Teléfono:</strong> <?php echo $telefono; ?></p></div>

                </div>
                <div class="row bordeada p-4">
                    <div class="col-sm-6 ticket-cliente-1 mr-0 pl-0 pr-2">
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0 mr-2"><strong>Cristales:</strong></p><?php echo '$' . $cristales_precio; ?> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Armazón:<div style="visibility:hidden">.</div></strong></p><?php echo '$' . $armazon_precio; ?> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Otros:<div style="visibility:hidden">.zzz</div></strong></p><?php echo '$' . $otros_precio; ?> </div>
                    </div>

                    <div class="col-sm-6 ticket-cliente-1 mr-0 pl-4 pr-2">
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Total:<div style="visibility:hidden">z</div></strong></p><?php echo '$' . "$total"; ?> </div>
                        
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Seña:<div style="visibility:hidden">zzzz</div></strong></p><?php echo "$" . "$senia"; ?> </div>
                       <!-- Linea con input text -->
                        <div class=" total pt-2 mb-4 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>SALDO:<div style="visibility:hidden">zzzz</div></strong></p><?php echo "<strong>" . "$" . $saldo . "</strong>" ?> </div>
                    </div>

                    
                    
                    
                </div>

                <hr class="divisor">

                <!-- Comprobante local 2 -->
                <div class="row">
                    <div class="col-sm-6 ticket-local-2">
                        <div class=""><p><strong>N° de trabajo:</strong> <?php echo $id_orden; ?></p></div>
                        <div class=""><p><strong>Cliente:</strong> <?php echo $nombre; ?></p></div>
                        <div class=""><p><strong>Fecha de entrega:</strong></p></div>
                        
                        <div class=""><p><strong>Sucursal:</strong> <?php echo $sucursal ?></p></div>
                        <div class=""><p><strong>Artículo:</strong> <?php echo $producto; ?> </p></div>
                        <div class=""><p><strong>Tratamientos:</strong> <?php echo $tratamiento; ?> </p></div>
                        <div class=""><p><strong>Armazón:</strong> <?php echo ($armazon . " - " . $tipo_armazon . " - " . $material_armazon)  ?> </p></div>
                    </div>

                    <div class="col-sm-6">
                        <!-- datos del lente, aca hay que poner un if por cada tipo de lente -->
                       
                       <div class="d-flex flex-column">
                          <!-- OJO DERECHO -->
                          <div class="form-group d-flex align-items-end mb-2">
                            <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                            <!-- ESF -->
                            <div class="text-center mr-3">
                              <label for="monofocal_lejos_der_esf">ESF</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_esf">
                            </div>
                            <!-- CIL -->
                            <div class="text-center mr-3">
                              <label for="monofocal_lejos_der_cil">CIL</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_cil">
                            </div>
                            <!-- EJE -->
                            <div class="text-center mr-3">
                              <label for="monofocal_lejos_der_eje">EJE</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_eje">
                            </div>
                            <!-- ADICION -->
                            <div class="text-center">
                              <label for="monofocal_lejos_der_add">ADD</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_add">
                            </div>
                          </div>

                          <!-- OJO IZQUIERDO -->
                          <div class="form-group d-flex align-items-end mb-3">
                            <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                            <!-- ESF -->
                            <div class="text-center mr-3">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_esf">
                            </div>
                            <!-- CIL -->
                            <div class="text-center mr-3">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_cil">
                            </div>
                            <!-- EJE -->
                            <div class="text-center mr-3">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_eje">
                            </div>
                            <!-- ADICION -->
                            <div class="text-center">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_add">
                            </div>
                          </div>
                        </div> 
                        <div class="d-flex flex-column">
                          <!-- OJO DERECHO -->
                          <div class="form-group d-flex align-items-end mb-2">
                            <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                            <!-- ESF -->
                            <div class="text-center mr-3">
                              <label for="monofocal_lejos_der_esf">ESF</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_esf">
                            </div>
                            <!-- CIL -->
                            <div class="text-center mr-3">
                              <label for="monofocal_lejos_der_cil">CIL</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_cil">
                            </div>
                            <!-- EJE -->
                            <div class="text-center mr-3">
                              <label for="monofocal_lejos_der_eje">EJE</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_eje">
                            </div>
                            <!-- ADICION -->
                            <div class="text-center">
                              <label for="monofocal_lejos_der_add">ADD</label>
                              <input class="form-control" type="text" id="monofocal_lejos_der_add">
                            </div>
                          </div>

                          <!-- OJO IZQUIERDO -->
                          <div class="form-group d-flex align-items-end">
                            <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                            <!-- ESF -->
                            <div class="text-center mr-3">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_esf">
                            </div>
                            <!-- CIL -->
                            <div class="text-center mr-3">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_cil">
                            </div>
                            <!-- EJE -->
                            <div class="text-center mr-3">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_eje">
                            </div>
                            <!-- ADICION -->
                            <div class="text-center">
                              <input class="form-control" type="text" id="monofocal_lejos_izq_add">
                            </div>
                          </div>
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="mt-3"><p><strong>Observaciones:</strong> <?php echo $observaciones; ?> </p></div>
                    </div>
                </div>
                    
                
                
            </div>
        </div>


<?php include 'views/footer.php' ?>

<script type="text/javascript">
    $(document).ready(function(){
        print();
    });
</script>
<style type="text/css">
    .header-comprobante {
        border-bottom: 1px solid #929494;
    }
    .logo-comprobante {
        width: 190px;
    }
    .logo-comprobante img{
        width: 100%;
    }
    .titulo-comprobante {
        border-top: 1px solid #929494;
        border-bottom: 1px solid #929494;
    }
    .info-comprobante p {
        margin-bottom: 0;
        
    }

    .img-fondo{
        display:none;
    }

    .puntuada {
        text-decoration: underline;
        text-decoration-style: dotted;
        padding: .5em;
    }

    .bordeada {
        border: 1px solid ;
    }

    .total {
        border-top: 2px solid #929494;
    }

</style>

<style type="text/css" media="print">
    @page{
        margin: 0;
    }

    *{
        font-size: 14px;
    }

    .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
        float: left;
   }
   .col-sm-12 {
        width: 100%;
   }
   .col-sm-11 {
        width: 91.66666667%;
   }
   .col-sm-10 {
        width: 83.33333333%;
   }
   .col-sm-9 {
        width: 75%;
   }
   .col-sm-8 {
        width: 66.66666667%;
   }
   .col-sm-7 {
        width: 58.33333333%;
   }
   .col-sm-6 {
        width: 50%;
   }
   .col-sm-5 {
        width: 41.66666667%;
   }
   .col-sm-4 {
        width: 33.33333333%;
   }
   .col-sm-3 {
        width: 25%;
   }
   .col-sm-2 {
        width: 16.66666667%;
   }
   .col-sm-1 {
        width: 8.33333333%;
   }

   .divisor {
    width: 100%;
    border-bottom: 1px dotted #ccc;
    /*border-bottom: 1px dotted red;*/
   }
    .footer {
        position: absolute;
        bottom: -15px;
        margin: 0 auto;
        width: 100%;
    }
    .footer p {
        font-size: 13px;
    }
    footer{
        display: none;
    }
</style>





    
