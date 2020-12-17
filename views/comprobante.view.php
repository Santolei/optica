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
                    <!-- Comprobante local 1 -->
                    <div class="col-xs-3 ticket-local-1">
                        <div class="col-12"><p><strong>Fecha de entrega:</strong></p></div>
                        <div class="col-12"><p><strong>Sucursal:</strong></p></div>
                        
                    </div>
                    <!-- Comprobante local 2 -->
                    <div class="col-xs-3 ticket-local-2">
                        <div class="col-12"><p><strong>Fecha de entrega:</strong></p></div>
                        <div class="col-12"><p><strong>Sucursal:</strong></p></div>
                    </div>
                    <!-- Comprobante cliente -->
                    <div class="col-xs-6 ticket-cliente"></div>
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





    
