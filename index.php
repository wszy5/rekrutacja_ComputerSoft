<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style>
        tr {         border-bottom: solid 1px #f00; 
 }
        td {
        border-bottom: solid 1px #f00; 
        border-left: solid 1px #f00;
        }
    </style>   
</head>
<body>
  
<table>
    <tr>
    <td>Currency</td>
    <td>Code</td>
    <td>Mid</td>
    </tr>
   
<?php
$app_info = file_get_contents("http://api.nbp.pl/api/exchangerates/tables/A/?format=json");
$app_info = json_decode($app_info, true);

$currencies =  $app_info[0]['rates'];

for($i=0; $i <sizeof($currencies); $i++){
    echo "<tr>";
    echo "<td>".$currencies[$i]['currency']."</td>";
    echo "<td>".$currencies[$i]['code']."</td>";
    echo "<td>".$currencies[$i]['mid']."</td>";
    echo "</tr>";
}

?>
  </table>

</body>
</html>