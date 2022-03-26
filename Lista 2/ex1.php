<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

<table style="border-collapse: collapse;">
<?php   for($i=1;$i<=10;$i++){   ?>
        <tr></tr>
<?php   for($j=1;$j<=10;$j++){  ?>
        <td style="text-align:center; border: 1px solid black; padding: 20px;">
<?php   echo($i." . ".$j." = ".$i*$j); ?>
        </td>
<?php
        }
    }
?>
</table>
    
</body>
</html>