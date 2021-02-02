<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content printable" style="padding-top: 15px;">
            <!-- <div class="header-comprobante d-flex justify-content-between align-items-center pb-4">
                <div class="info-comprobante">
                    <p><strong>Nombre y apellido:</strong> <?php echo $nombre; ?></p> 
                    <p><strong>Tel:</strong> <?php echo $telefono; ?></p>
                    <p><strong>Dr:</strong> <?php echo $doctor; ?></p>
                    
                </div>
                <div class="info-comprobante">
                    <img src="assets/img/Logo1chico.png" alt="" style="float: left;">
                    <div style="float: right;" class="ml-3">
                        <p><strong>Óptica-Foto El Poeta</strong></p>
                        <p>Juan de Videla 79 - Merlo, San Luis</p>
                        <p>Tel: (02656) 475710 / 475728</p>
                    </div>
                </div>
            </div> -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Comprobante Cliente 1 -->
                    <div class="col-xs-4 ticket-cliente-1 ml-0 mr-0 pl-0 pr-2">
                        <div class="col-12"><p><strong>Fecha de entrega:</strong></p></div>
                        <div class="col-12"><p><strong>Sucursal:</strong></p></div>
                        <div class="col-12"><p><strong>Trabajo:</strong></p></div>
                        <div class="col-12"><p><strong>N° de trabajo:</strong></p></div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0 mr-2"><strong>Paciente:</strong></p><input type="text" value="<?php echo $nombre; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0 mr-2"><strong>Teléfono:</strong></p><input type="text" value="<?php echo $telefono; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0 mr-2"><strong>Cristales:</strong></p><input type="text" value="<?php echo '$' . $cristales_precio; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Armazón:<div style="visibility:hidden">.</div></strong></p><input type="text" value="<?php echo '$' . $armazon_precio; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Otros:<div style="visibility:hidden">.zzz</div></strong></p><input type="text" value="<?php echo '$' . $otros_precio; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Subtotal:<div style="visibility:hidden">z</div></strong></p><input type="text" value="<?php echo '$' . "4000"; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Pago:<div style="visibility:hidden">zzzz</div></strong></p><input type="text" value="<?php echo "Efectivo"; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Seña:<div style="visibility:hidden">zzzz</div></strong></p><input type="text" value="<?php echo "$" . "500"; ?>" class="form-control text-center" style="width:170px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>TOTAL:<div style="visibility:hidden">.zz</div></strong></p><input type="text" value="<?php echo "$" . "4500"; ?>" class="form-control text-center" style="width:170px; border: 2px solid #929494"> </div>
                    </div>
                    <!-- Comprobante local 2 -->
                    <div class="col-xs-3 ticket-local-1">
                        <div class="col-12"><p><strong>Fecha de entrega:</strong></p></div>
                        <div class="col-12"><p><strong>Sucursal:</strong></p></div>
                        <div class="col-12"><p><strong>Trabajo:</strong></p></div>
                        <div class="col-12"><p><strong>N° de trabajo:</strong></p></div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0 mr-2"><strong>Cristales:</strong></p><input type="text" value="<?php echo '$' . $cristales_precio; ?>" class="form-control text-center" style="width:80px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Armazón:<div style="visibility:hidden">.</div></strong></p><input type="text" value="<?php echo '$' . $armazon_precio; ?>" class="form-control text-center" style="width:80px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Otros:<div style="visibility:hidden">.zzz</div></strong></p><input type="text" value="<?php echo '$' . $otros_precio; ?>" class="form-control text-center" style="width:80px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Subtotal:<div style="visibility:hidden">z</div></strong></p><input type="text" value="<?php echo '$' . "4000"; ?>" class="form-control text-center" style="width:80px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Pago:<div style="visibility:hidden">zzzz</div></strong></p><input type="text" value="<?php echo "Efectivo"; ?>" class="form-control text-center" style="width:80px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>Seña:<div style="visibility:hidden">zzzz</div></strong></p><input type="text" value="<?php echo "$" . "500"; ?>" class="form-control text-center" style="width:80px"> </div>
                        <!-- Linea con input text -->
                        <div class="mb-2 d-flex align-items-center justify-content-between"><p class="m-0 p-0"><strong>TOTAL:<div style="visibility:hidden">.zz</div></strong></p><input type="text" value="<?php echo "$" . "4500"; ?>" class="form-control text-center" style="width:80px; border: 2px solid #929494"> </div>
                    </div>
                    <!-- Comprobante local 2 -->
                    <div class="col-xs-5 ticket-local-2">
                        <div class="mr-2"><p><strong>Cliente:</strong> <?php echo $nombre; ?></p></div>
                        <div class=""><p><strong>Entrega:</strong></p></div>
                        <div class=""><p><strong>N° de trabajo:</strong></p></div>
                        <div class=""><p><strong>Local:</strong> </p></div>
                        <div class=""><p><strong>Artículo:</strong>  </p></div>

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
                          <div class="form-group d-flex align-items-end mb-0">
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


                        <div class="mt-4"><p><strong>Tratamientos:</strong>  </p></div>
                        <div class=""><p><strong>Armazón:</strong>  </p></div>
                        <div class=""><p><strong>Observaciones:</strong>  </p></div>

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
        /*border-bottom: 2px solid #929494;*/
    }
    .logo-comprobante {
        width: 180px;
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
        font-size: 13px;
    }

    .img-fondo{
        display:none;
    }

    .puntuada {
        text-decoration: underline;
        text-decoration-style: dotted;
    }

</style>

<style type="text/css" media="print">
    @page{
        margin: 0;
    }

    *{
        font-size: 14px;
    }

    .ticket-cliente-1,
    .ticket-local-1 {
        border-right: 1px dotted #999992;
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





    
