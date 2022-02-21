<?php 
include('config/app.php');

$qKriteria = $link -> query("SELECT * FROM tbl_kriteria;");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div style="margin:20px;">
    <?php
    while($fKriteria = $qKriteria -> fetch_assoc()){ ?>
    <strong>Nama : <?=$fKriteria['nama_kriteria']; ?></strong><br/>
    <?php }?>
  </div>  
</body>
</html>