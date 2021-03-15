<?php
$con = mysqli_connect("localhost","user",'pass',"db");


// verificar la conexión
if (mysqli_connect_errno()) {
printf("Conexión fallida: %s\n", mysqli_connect_error());
exit();
}


// consulta
$query="SELECT `ID_serv`,`Nmb_serv`,`ID_colecc`,`Nmb_colecc` FROM `Serv` , `Colecc` WHERE
`ID_colecc`= 1 and `Nmb_colecc`=`Colecc_serv`";
if ($result = mysqli_query($con, $query)) {
  
  
// obtener array asociativo
while ($row = mysqli_fetch_assoc($result)) {
printf ("%s. (%s)\n <br>", $row["Nmb_serv"], $row["ID_serv"]);
}
  
  
// liberar el conjunto de resultados
mysqli_free_result($result);
}

// cerrar la conexión
mysqli_close($link);
?>
