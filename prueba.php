<h1>Pagina en php</h1>
<?php
$var1=1;
$var2=2;
$edad=23;
$res=0;
echo "Hola Mundo 1 <br>";
echo "Hola Mundo 2 <br>";
//exit();
echo "Hola Mundo 3 <br>";
echo "Hola Mundo 4 <br>";

if($edad>=18){
    echo "Usted es mayor de edad";
}else{
    echo "Usted es menor de edad";
}
for ($i=0; $i < 15; $i++){
    $ope=5*$i;
    echo "5 * ".$i." = ".$ope."<br>";  
}
?>