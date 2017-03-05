<?php
$musTc=$_POST["post_mustc"];
$musAdi=$_POST["post_musAdi"];
$musSoyadi=$_POST["post_musSoyadi"];
$musTel=$_POST["post_musTel"];
$musAdres=$_POST["post_musAdres"];

try {
    $db = new PDO("mysql:host=localhost;dbname=vet2", "root", "1");
} catch ( PDOException $e ){
    print $e->getMessage();
}

$query = $db->prepare("INSERT INTO musteri SET
ad = ?,
soyad = ?,
telefon = ?,
adres = ?,
tc = ?
");
$insert = $query->execute(array(
    "$musAdi", "$musSoyadi", "$musTel","$musAdres","$musTc"
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    $db->close();
    echo "Basarili";
}

?>
