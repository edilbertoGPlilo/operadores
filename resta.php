<?php
// variables
$n1=0;
$n2=0;
$s=0;
//
if(isset($_POST["btncalcular"])){

$n1 = (int)$_POST["txtn1"];
$n2 = (int)$_POST["txtn2"];
// salida
$s = $n1-$n2;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="resta.php" method="post">

       <table width="300" border=1>
        <tr>
            <td> calcula la resta de dos numeros</td>
        </tr>
        <tr>
            <td>numero 1 </td>
            <td><input name="txtn1" type="text" id="txtn1" value="<?=$n1?>"></td>
        </tr>
        <tr>
            <td>numero 2 </td>
            <td><input name="txtn2" type="text" id="txtn2" value="<?=$n2?>"></td>
        </tr>
        <tr>
            <td>resta</td>
            <td>
              <input name="txts"type="text" id="txts"value="<?=$s?>">  
            </td>
            <tr>
            <td> </td>
            <td>
                <input name="btncalcular" type="submit" id="btncacular" value="cacular">
             </td>
        </tr>
        </tr>
       </table>

     </form>
</body>
</html>