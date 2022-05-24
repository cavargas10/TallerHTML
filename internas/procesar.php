<?php
extract($_POST);
echo $nombres." ".$edad."<br>";

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];

if($edad<18){
    echo "Usted es menor de edad";
}else if($edad>65){
    echo "Usted es un adulto mayor";
}else{
    echo "Usted es mayor de edad";
}

?>