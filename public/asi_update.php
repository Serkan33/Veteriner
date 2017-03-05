<?php
$asi_id    = $_POST['id'];
$asi_ad    = $_POST['asi_adi'];
$asi_tur   = $_POST['asi_tur'];
$asi_resim = $_POST['asi_resim'];
if ($asi_resim=="") {
  $asi_resim="img/avatar5.png";
}
try {
   $db = new PDO("mysql:host=localhost;dbname=vet2", "root", "1");
} catch ( PDOException $e ){
   print $e->getMessage();
}


$query = $db->prepare("UPDATE asi_listesi SET
adi   = :asi_ad,
turu  = :asi_tur,
resim = :asi_resim
WHERE asi_id = :asi_idd");
$update = $query->execute(array(
     "asi_ad"    => "{$asi_ad}",
     "asi_tur"   => "{$asi_tur}",
     "asi_resim" => "{$asi_resim}",
     "asi_idd"   => "{$asi_id}"

));
if ( $update ){
     print "güncelleme başarılı!";
}
else {
  echo "Başarısız";
}



 ?>
