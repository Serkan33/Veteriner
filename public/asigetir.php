<?php
  $asi=$_POST['id'];
  try {
      $db = new PDO("mysql:host=localhost;dbname=vet2", "root", "1");
  } catch ( PDOException $e ){
      print $e->getMessage();
  }
  $query = $db->query("SELECT * FROM asi_listesi WHERE asi_id = '{$asi}'")->fetch(PDO::FETCH_ASSOC);
  if ( $query ){
    echo json_encode($query);
  }

 ?>
