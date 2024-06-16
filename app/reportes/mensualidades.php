<?php
   if(isset($_GET['idmen'])){
    $idmensualidd=$_GET['idmen'];
    $idmens=$idmensualidd;
    require_once('../lib/pdf/mpdf.php');
    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $idprofe =$_SESSION['idProfesor'];
    $consulta=mysqli_query($db, "SELECT * FROM `mensualidad` WHERE `id` = '$idmensualidd' ");
    $html= '
    <header class="clearfix">
    <div id="logo">
      <img src="img/logo.png" alt="logo de la empresa">
    </div>
    <h1>Mensualidad</h1>
    <div id="company" class="clearfix">
      <div>TaekWondo Master</div>
      <div>Guadalajara,<br /> av. matatlan, MEXICO</div>
      <div>33-12-99-52-27</div>
      <div><a href="mailto:TKDmaster@gmail.com">TKDmaster@gmail.com</a></div>
    </div>
    <div id="project">
      <div><span>Concepto:</span> Mensualidad</div>';
      while($row0 = mysqli_fetch_array($consulta))
     {
       $IDALUMNOMEN =$row0['alumnoId'];
       $consulta7=mysqli_query($db, "SELECT *
       FROM `alumnos` WHERE `id` = '$IDALUMNOMEN' ");
       while($row7 = mysqli_fetch_array($consulta7))
       {
        $html .=   '
            <div><span>No. Alumno:</span> '.$row7['id'].'</div>
            <div><span>Alumno:</span> '.$row7['nombres'].' '.$row7['ApellidoP'].' '.$row7['ApellidoM'].'</div>
            <div><span>Fecha de Inscripcion:</span> '.$row7['FechaInscripcion'].'</div>
            <div><span>RFC:</span> '.$row7['rfc'].'</div>
            <div><span>Curp:</span> '.$row7['curp'].'</div>';
            $IDMAESTRO =$row7['maestroId'];
            $consulta2=mysqli_query($db, "SELECT *
            FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
       
            while($row2 = mysqli_fetch_array($consulta2))
            {
                $html .= '    <div><span>Maestro:</span> '.$row2['nombres'].'</div>';
            }
            $IDCINTA=$row7['cintaId'];
            $consulta3=mysqli_query($db, "SELECT *
            FROM `cintas` WHERE `id` = '$IDCINTA'");
  
            while($row3 = mysqli_fetch_array($consulta3))
            {
                $html .= '    <div><span>Cinta:</span> '.$row3['nombre'].'</div>';
            }
       }
    }
$html .=   '
    </div>
  </header>
  <main>
    <table> 
        <thead>
            <tr>
                <th class="service">No. Mensualidad</th>
                <th class="service">Alumno</th>
                <th class="service">Importe</th>
                <th class="service">Fecha de Pago</th>
            </tr>
            <tbody>';
            $consulta=mysqli_query($db, "SELECT * FROM `mensualidad` WHERE `id` = '$idmensualidd' ");
            while($row0 = mysqli_fetch_array($consulta))
     {
$html .=   '<tr>
            <td class="service">'.$row0['id'].'</td>';

       $IDALUMNOMEN =$row0['alumnoId'];
       $consulta7=mysqli_query($db, "SELECT *
       FROM `alumnos` WHERE `id` = '$IDALUMNOMEN' ");
       while($row7 = mysqli_fetch_array($consulta7))
       {
$html .=   '<td class="desc">'.$row7['nombres'].' '.$row7['ApellidoP'].'</td>';
       }
$html .=   '<td class="unit">'.$row0['importe'].'</td>
            <td class="qty">'.$row0['fechaPago'].'</td>
            </tr>';
     }
$html  .= '
                <tr>
                <td colspan="4" class="grand total"></td>
                <td class="grand total"></td>
                </tr>
            </tbody>
        </thead>
    </table>
    <div id="notices">
      <div>Atentamente:</div>
      <div class="notice">Muchas gracias Por estar con nosotros.</div>
      <div class="notice">TKD-Master.</div>
    </div>
  </main>
  <footer>
    Todos los derechos estan reservados - TKD master - 2021
  </footer>';
    
    $mpdf = new mPDF('c','A4');
    $css = file_get_contents('css/style.css');
    $mpdf->writeHTML($css, 1);
    $mpdf->writeHTML($html);
    $mpdf->Output('reporte.pdf','I');
   }
?>