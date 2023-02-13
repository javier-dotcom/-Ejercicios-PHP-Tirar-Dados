<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <style>
    body{
        width: 80%;
        background-color:black;
        color:white;
        text-align:center;
        margin:auto;
    }
    .dados{
        background-color:white;
        color:black;
        margin:auto;
        width: 60%;
    }
    .button:hover{
cursor: pointer;
    }
</style>
</head>
<body>
    <h2>Dados</h2>

<h3>Escribe un programa que simule la tirada de dos dados. El programa deberá continuar
tirando (y mostrando) los dados una y otra vez hasta que en alguna tirada los dos dados
tengan el mismo valor. Al final, deberá mostrar cuantas tiradas se necesitaron para alcanzar
el objetivo</h3>


<form action="Ejercicio_100.php">
<button class="button"name="tirar" type="submit"> Tirar Dados </button> <br><br>
</form>

<?php
if(isset($_GET["tirar"])){
$acu=0;
$dado1=0;
$dado2=1;
While($dado1!=$dado2){
$dado1=rand(1,6);
$dado2=rand(1,6);
echo  "DADO 1 =".  $dado1;
echo "<br>";

echo  "DADO 2 =".  $dado2;
$acu++;
echo "<br>";
echo "<br>";
}

echo " <h3 class='dados'>Se necesitó tirar $acu vecves los dados para alcanzar el objetivo</h3>" ;

}

?>
</body>
</html>


