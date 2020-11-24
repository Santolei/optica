<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content printable" style="padding-top: 15px;">
            <div class="header-comprobante d-flex justify-content-between align-items-center pb-4">
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
                    
                    <!-- <p><strong><i class="fa fa-clock-o"></i></strong> <?php echo $fecha; ?> </p> -->
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-2 pt-0" style="width: 60%;">
                            <h5 class="mb-2 mt-0">Datos cristales:</h5>
                            <div class="container-datos d-flex justify-content-between">
                                <div class="dato mr-4">
                                    <h6><u>Tipo de lente:</u> </h6> <?php echo $tipo_lente ?>
                                </div>
                                <div class="dato mr-4">
                                    <h6><u>Material:</u> </h6> <?php echo $material ?>
                                </div>
                            </div>

                            <div class="container-datos d-flex">
                                <div class="dato mr-4">
                                    <h6><u>Cristales:</u> </h6> <?php echo $producto ?>
                                </div>
                            </div>
                            <div class="dato">
                                <h6><u>Armazón:</u> </h6> <?php echo $armazon ?>
                            </div>

                            <!-- SI ES MONOFOCAL MOSTRAMOS LO DATOS  -->
                            <?php if ($tipo_lente === 'Monofocal'): ?>
                                <div class="dato d-flex">

                                    <div class="mr-4">
                                        <h6><u>LEJOS:</u> </h6> 
                                        <strong>OD:</strong><?php echo $multifocal_lejos_der ?> <strong>OI:</strong> <?php echo $multifocal_lejos_izq ?>
                                    </div>
                                    
                                    <div>
                                        <h6><u>ADICION:</u> </h6> <strong>OD:</strong> <?php echo $multifocal_adicion_der ?> <strong>OI:</strong> <?php echo $multifocal_adicion_izq ?>
                                    </div>
                                    
                                </div>
                            <?php endif ?>

                            <!-- SI ES MULTIFOCAL MOSTRAMOS LO DATOS  -->
                            <?php if ($tipo_lente === 'Multifocal'): ?>
                                <div class="dato d-flex">

                                    <div class="mr-4">
                                        <h6><u>LEJOS:</u> </h6> 
                                        <strong>OD:</strong><?php echo $multifocal_lejos_der ?> <strong>OI:</strong> <?php echo $multifocal_lejos_izq ?>
                                    </div>
                                    
                                    <div>
                                        <h6><u>ADICION:</u> </h6> <strong>OD:</strong> <?php echo $multifocal_adicion_der ?> <strong>OI:</strong> <?php echo $multifocal_adicion_izq ?>
                                    </div>
                                    
                                </div>
                            <?php endif ?>
                            
                        </div>
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

    .tabla-thead {
        background: #e2e2e2;
    }
    thead th {
        font-weight: bolder;
    }
    td {
        font-size: 12px;
    }

    .table>tbody>tr>td{
        border-top: none;
    }
    .table > tbody > tr > td {
        padding: 9px 8px;
    }

    .table>thead>tr>th {
        border-bottom: 1px solid #929494;
    }
    h4 {
        font-size: 20px;
    }

    .img-fondo {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        opacity: .10;
    }
    .subtotal h5,
    .recargo h5{
        font-size: 14px;
    }
   
    .total {
        padding: 0 1em;
        margin: 0 auto;
        width: 100%;
        position: absolute;
        left: 0;
        bottom: 25px;
        border-bottom: 2px solid #929494;
        border-top: 2px solid #929494;
        font-size: 12px;
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





    
