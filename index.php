<?php
include 'header.php';

$db=new baza();
  $db->spajanje();
  $sql="SELECT * FROM dz04_korisnici WHERE id='2'";

  $rez=mysqli_fetch_all($db->izvrsiSelect($sql));
  $db->prekiniVezu();


include 'predlosci/footer.tpl';
?>
 
