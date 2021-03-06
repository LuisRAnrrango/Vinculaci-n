<?php
require_once('conexion/conexion.php');
//	$usuario = 'SELECT * FROM usuarios ORDER BY id DESC';	
//	$usuarios=$mysqli->query($usuario);
$usuario = 'SELECT * FROM citas ORDER BY IDCITA DESC';
$usuarios = $mysqli->query($usuario);

if (isset($_POST['create_pdf'])) {
    require_once('tcpdf/tcpdf.php');

    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Jhon Escobar');
    $pdf->SetTitle($_POST['reporte_name']);

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetMargins(20, 20, 20, false);
    $pdf->SetAutoPageBreak(true, 20);
    $pdf->SetFont('Helvetica', '', 10);
    $pdf->addPage();

    $content = '';

    $content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">' . $_POST['reporte_name'] . '</h1>
       	
<table border="1" cellpadding="5">
        <thead>
          <tr>
           <th>Id Especialidad</th>
            <th>Fecha Cita</th>
            <th>Nombre Paciente</th>
             <th>Cedula</th>
           <th>Telefono</th>
            <th>Hora</th>
             <th>Estado</th>
          </tr>
        </thead>
	';


    while ($user = $usuarios->fetch_assoc()) {
//        if ($user['IDESPECIALIDAD'] != 'A') {
//            $color = '#f5f5f5';
//        } else {
            $color = '#f5f5f5';
         if ($user['ESTADO_CITA'] != 'DISPONIBLE') {
//            $color = '#f5f5f5';
       
        $content .= '
		<tr bgcolor="' . $color . '">
            <td>' . $user['IDESPECIALIDAD'] . '</td>
            <td>' . $user['FECHACITA'] . '</td>
            <td>' . $user['NOMBREPACIENTE'] . '</td>
               <td>' . $user['CEDULA'] . '</td>
                   <td>' . $user['TELEFONO'] . '</td>
                       <td>' . $user['HORA'] . '</td>
                       <td>' . $user['ESTADO_CITA'] . '</td>
                           
   
        </tr>
	';
         }
    }

    $content .= '</table>';

    $content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Pdf Creator </span><a href="http://www.google.com">By Jhon Escobar</a>
            </div>
        </div>
    	
	';

    $pdf->writeHTML($content, true, 0, true, 0);

    $pdf->lastPage();
    $pdf->output('Reporte.pdf', 'I');
}
//---------------------------------------------- citas disponibles
if (isset($_POST['create_pdf2'])) {
    require_once('tcpdf/tcpdf.php');

    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Jhon Escobar');
    $pdf->SetTitle($_POST['reporte_name2']);

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetMargins(20, 20, 20, false);
    $pdf->SetAutoPageBreak(true, 20);
    $pdf->SetFont('Helvetica', '', 10);
    $pdf->addPage();

    $content = '';

    $content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">' . $_POST['reporte_name2'] . '</h1>
       	
<table border="1" cellpadding="5">
        <thead>
          <tr>
           <th>Id Especialidad</th>
            <th>Fecha Cita</th>
            <th>Nombre Paciente</th>
             <th>Cedula</th>
           <th>Telefono</th>
            <th>Hora</th>
             <th>Estado</th>
          </tr>
        </thead>
	';


    while ($user = $usuarios->fetch_assoc()) {
//        if ($user['IDESPECIALIDAD'] != 'A') {
//            $color = '#f5f5f5';
//        } else {
            $color = '#f5f5f5';
         if ($user['ESTADO_CITA'] == 'DISPONIBLE') {
//            $color = '#f5f5f5';
       
        $content .= '
		<tr bgcolor="' . $color . '">
            <td>' . $user['IDESPECIALIDAD'] . '</td>
            <td>' . $user['FECHACITA'] . '</td>
            <td>' . $user['NOMBREPACIENTE'] . '</td>
               <td>' . $user['CEDULA'] . '</td>
                   <td>' . $user['TELEFONO'] . '</td>
                       <td>' . $user['HORA'] . '</td>
                       <td>' . 'Disponible' . '</td>
                           
   
        </tr>
	';
         }
    }

    $content .= '</table>';

    $content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Pdf Creator </span><a href="http://www.google.com">By Jhon Escobar</a>
            </div>
        </div>
    	
	';

    $pdf->writeHTML($content, true, 0, true, 0);

    $pdf->lastPage();
    $pdf->output('Reporte.pdf', 'I');
}
?>



<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Exportar a PDF</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!-- Meta Mobil
        ================================================== -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row padding">
                <div class="col-md-12">
                    <?php
                    $h1 = "Reporte de Citas";
                    echo '<h1>' . $h1 . '</h1>'
                    ?>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID Especialidad</th>
                            <th>Fecha Cita</th>
                            <th>Nombre Paciente</th>
                            <th>Cedula</th>
                            <th>Telefono</th>
                            <th>Hora Cita</th>
                            <th>Estado</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($user = $usuarios->fetch_assoc()) { ?>

                            <tr class="<?php
//                            if ($user['IDESPECIALIDAD'] != 's') {
//                                echo 'active';
//                            } else {
//                                echo 'danger';
//                            }
                            ?>">
                                <td><?php echo $user['IDESPECIALIDAD']; ?></td>
                                <td><?php echo $user['FECHACITA']; ?></td> 
                                <td><?php echo $user['NOMBREPACIENTE']; ?></td> 
                                 <td><?php echo $user['CEDULA']; ?></td> 
                                <td><?php echo $user['TELEFONO']; ?></td> 
                                <td><?php echo $user['HORA']; ?></td> 
                                <td><?php echo $user['ESTADO_CITA']; ?></td> 

                            </tr>
<?php } ?>



                    </tbody>
                </table>
                <div class="col-md-12">
                    <form method="post">
                        <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                        <input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Citas Reservadas">
                    </form> 
                    <form method="post">
                        <input type="hidden" name="reporte_name2" value="<?php echo $h1; ?>">
                        <input type="submit" name="create_pdf2" class="btn btn-danger pull-right" value="Citas Disponibles">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
