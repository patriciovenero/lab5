<?php
        $P1 = $_POST['precio'];
        $calculo = $P1;
        echo "El precio de la gaseosa es : ".$calculo ." soles";
        echo "<br>";

        $P2 = $_POST['cantidad'];
        $cantidad = $P2;
        echo "La cantidad de gaseosas es : ".$cantidad." de 3L";
        echo "<br>";
 
        echo "---------------------------------------------------------------------------";
        echo "<br>";

        $nuevo_precio = 0.05 * $calculo;
        echo "El nuevo precio es : ".$nuevo_precio;
        echo "<br>";

        $icompra = $nuevo_precio * $cantidad;
        echo "El importe de la compra es : ".$icompra;
        echo "<br>";

        $idescuento = 0.07 * $icompra;
        echo "El importe del descuento adicional es : ".$idescuento;
        echo "<br>";

        $ipagar = $icompra - $idescuento;
        echo "El imorte a pagar es : ".$ipagar;
        echo "<br>";

        $obsequio = 2 * $cantidad;
        echo "Su obsequio es de ".$obsequio." caramelos por cada gaseosa adquirida";
        echo "<br>";
?>