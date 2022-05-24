<?php
$conect = new mysqli("127.0.0.1", "root", "","tallerhtmldb");

/*if($conect){
    echo "Se conecto"
}else{
    echo "ERROR EN LA DB"
}*/

//extract($_POST);
//echo $nombres." ".$edad."<br>";

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$tipoUser=$_POST['tipoUser'];

//echo $nombres." ".$apellidos." ".$correo." ".$tipoUser;

$sql="insert into usuarios values('', '$nombres', '$apellidos', '$correo', '$tipoUser')";
//$sql="delete from usuarios where id=1";

$restSql=mysqli_query($conect, $sql);
if(!$restSql){
    echo "ERROR EN LA DB";
}else{
    echo "Se ejecuto correctamente";
}

/*
CALCULAR EDAD
if($edad<18){
    echo "Usted es menor de edad";
}else if($edad>65){
    echo "Usted es un adulto mayor";
}else{
    echo "Usted es mayor de edad";
}*/
?>