<?php
        $P1 = $_POST['cantidadhijos'] ;
        $producto = 50 * $P1;
        echo "La bonifiacacion es : ".$producto;
        echo "<br>";

        $P2 = $_POST['valorvendido'];
        $comision = $P2 * 0.075;
        echo "La comision es de : ".$comision;
        echo "<br>";

        $sueldo_bruto = 600 + $comision + $producto;
        echo "El sueldo bruto es de : ".$sueldo_bruto;
        echo "<br>";

        $descuento = $sueldo_bruto * 0.11;
        echo "El descuento es de : ".$descuento;
        echo "<br>";

        $sueldo_neto = $sueldo_bruto + +$P1 - $descuento;
        echo "El sueldo Neto es de : ".$sueldo_neto;
        echo "<br>";
?>
