<?php
    if ($_POST){
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $subtotal=$precio*$cantidad;
        $fechahora=Date("F_j_Y");
        $pedido = array();
        $ruta=$fechahora."_pedido.json";

        if(file_exists($ruta)){
            //leer json
            $archivo=file_get_contents($ruta);
            $pedido=json_decode($archivo,true);

            $pedido[]=array('nombre'=> $nombre,'precio'=> $precio,'cantidad'=> $cantidad,'subtotal'=> $subtotal);

            //creamos la cadena json
           $json_string =json_encode($pedido);
            echo $json_string;

           $file =$ruta;
           file_put_contents($file, $json_string);
           echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=tiendaDB.php>';
        }else{
            $pedido[]=array('nombre'=> $nombre,'precio'=> $precio,'cantidad'=> $cantidad,'subtotal'=> $subtotal);
            //creamos la cadena jason
            $json_string =json_encode($pedido);
           echo $json_string;
           $file =$ruta;
           file_put_contents($file, $json_string);
           echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=tiendaDB.php>';
        }

    }


?>