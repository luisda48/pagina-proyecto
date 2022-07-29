<?php
$host="localhost";
$user="pm";
$pass="Across009";
$db="pn2";
$conec=mysqli_connect($host,$user,$pass,$db);

//cambiar los datos de acuerdo a tu base de datos, nombres de variables, etc.

$cor=$_POST['cor'];
$con=$_POST['con'];
session_start();

$consu="SELECT*FROM registro where ce='$cor' and con='$con'";

$res=mysqli_query($conec,$consu);

$fis=mysqli_num_rows($res);

if ($fis) {
echo "<script> alert('Login Correcto');
  location.href='../PN2/Inicio.html';
  </script>";
} else {
  echo "<script> alert('Usuario o contraseña inccorrecta, intente nuevamente');
  location.href='../PN2/index.html';
  </script>";
}

?>