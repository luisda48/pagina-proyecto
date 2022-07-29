<?php
$host="localhost";
$user="pm";
$pass="Across009";
$db="pn2";
$conec=mysqli_connect($host,$user,$pass,$db);

$ng=$_POST['ng'];
$gen=$_POST['gen'];
$dis=$_POST['dis'];
$coel=$_POST['coel'];
$nc=$_POST['nc'];
$opc=$_POST['opc'];

$sql = "INSERT INTO contacto (ng,gen,dis,coel,nc,opc) VALUES ('$ng','$gen','$dis','$coel','$nc','$opc')";

$qy=mysqli_query($conec, $sql);

 if($qy){
  echo "<script> alert('Estaremos en contacto pronto...');
  location.href='../PN2/Inicio.html';
  </script>";
}else{
 echo "<script> alert('Ups... Ocurrio un error');
  location.href='../PN2/index.html';
  </script>";
}
?>