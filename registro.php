<?php
$host="localhost";
$user="pm";
$pass="Across009";
$db="pn2";
$conec=mysqli_connect($host,$user,$pass,$db);

//cambiar las variables a tuda datos, confirma que el usuario, contraseña y base de datos sean correctas

$na=$_POST['na'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$ce=$_POST['ce'];
$num=$_POST['num'];
$con=$_POST['con'];

$sql = "INSERT INTO registro (na,ap,am,ce,num,con) VALUES ('$na','$ap','$am','$ce','$num','$con')";

$qy=mysqli_query($conec, $sql);

 if($qy){
  echo "<script> alert('El usuario a sido registrado');
  location.href='index.html';
  </script>";
}else{
 echo "<script> alert('Ups... Ocurrio un error');
  location.href='../PN2/registro.html';
  </script>";
}

?>