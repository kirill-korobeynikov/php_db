<?php
header('Content-Type: application/vnd.ms-excel; charset=utf-8');
header("Content-Disposition: attachment; filename=".("payments")."-export.xls");
header("Content-Transfer-Encoding: binary ");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
<table class="table">
 <thead>
     <tr>
     <p> </p>    
         <p>История платежей</p>
         <th scope="col">#</th>  
            <th scope="col">Номер плательщика</th>  
            <th scope="col">Месяц платежа</th>
            <th scope="col">Сумма</th>  
     </tr>
 </thead>
<tbody>
    <?php
        $db = mysqli_connect("localhost", "root", "", "cores");
        mysqli_query($db, "set names utf8");
        $r = mysqli_query($db, "SELECT * FROM `pay_history`");
        $r = mysqli_fetch_all($r);
        foreach ($r as $myrow) {
    ?>
<tr>
<th scope="col"><?= $myrow[0]?></th>
    <td><?= $myrow[1] ?></td>
    <td><?= $myrow[2] ?></td>
    <th><?= $myrow[3] ?></th>
   
</tr>
<?php
}
?>
</tbody>
</table> 
