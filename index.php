<?php
//opdracht 1
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

echo var_dump($klas);

 ?>

<?php
//opdracht 2
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

for ($i=0; $i <1 ; $i++) {
  echo implode("\n", $klas);
}

 ?>

<?php
//opdracht 3
$bucket_list = array();
$hoeveelheid_activiteiten;

echo "Hoeveel activiteiten hij/zij wil toevoegen aan de bucketlist ";
$input = rtrim(fgets(STDIN));

 ?>
