<?php 
if(isset($_REQUEST['cmdEnviar'])){
    $nombres= $_REQUEST['nombres'];
    $apellidos= $_REQUEST['apellidos'];
    $fechaNacimiento= $_REQUEST['fechaNacimiento'];
    $sueldo= $_REQUEST['sueldo'];
    $pais= $_REQUEST['pais'];
    $preferencias= $_REQUEST['preferencias'];
    $direccion= $_REQUEST['direccion'];
    echo "Informacion recolectada<br>";
    echo "Nombre: ".$nombres."<br>Apellidos: ".$apellidos."<br> Fecha de nacimiento: ".$fechaNacimiento."<br>Sueldo: ".$sueldo."<br>Preferencias: <br>";
    foreach($preferencias as $pre){
        echo "<ul><li>".$pre."</li></ul>";
    };
    echo "<br>Dirección: ".$direccion;
}
?>