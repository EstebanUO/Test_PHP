<?php
    echo 'Hola mundo';

    echo "<h1>Bienvenidos</h1>";

    print("pruebas de como usar php ");

    echo "<br></br>";

    //Variables
    $nombre = "Esteban";
    $altura = 183;

    echo "$nombre";

    echo "<br></br>";

    echo "$altura";

    //concatenar
    $texto = "Hola, buen dia!! ";
    echo "<h1>".$texto.$nombre.", su altura es: ".$altura."cm"."</h1>";

    $texto .= "Adios";
    echo "$texto";

    #GET
    echo "<hr>";
    echo $_GET["nombre"];
?>