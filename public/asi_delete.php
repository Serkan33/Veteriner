<?php
$asi_id    = $_POST['id'];
try {
   $db = new PDO("mysql:host=localhost;dbname=vet2", "root", "1");
} catch ( PDOException $e ){
   print $e->getMessage();
}

$query = $db->prepare("DELETE FROM asi_listesi WHERE asi_id = :id");
$delete = $query->execute(array(
   'id' => $_POST['id']
));
if ($delete) {
  echo "Veri Başarıyla Silindi";
}

?>
