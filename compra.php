<?php
$host="localhost";
$user="pm";
$pass="Across009";
$db="pn2";
$conec=mysqli_connect($host,$user,$pass,$db);

$art=$_POST['art'];
$op=$_POST['op'];
$ford=$_POST['ford'];
$nam=$_POST['nam'];
$core=$_POST['core'];
$mp=$_POST['mp'];

$sql = "INSERT INTO compra (art,op,ford,nam,core,mp) VALUES ('$art','$op','$ford','$nam','$core','$mp')";

$qy=mysqli_query($conec, $sql);

 if($qy){
  echo "<script> alert('La solicitud esta en proceso...');
  location.href='../PN2/Inicio.html';
  </script>";
}else{
 echo "<script> alert('Ups... Ocurrio un error');
  location.href='../PN2/index.html';
  </script>";
}
?>