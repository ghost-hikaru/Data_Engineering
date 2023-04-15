<?php
// Définition de la fonction pour générer les options d'un élément select à partir des données d'un fichier CSV

function generateSelectOptions($filename) {
    $data = readCsvFile($filename);
    echo '<option value="">--Please choose an option--</option>';
    foreach ($data as $row) {
      $value = $row[0];
      $text = $row[1];
      $prix = $row[2];
      echo "<option value='$text' data-price='$prix'>$text ---- $prix €</option>";
      
    }
  }
  
// Définition de la fonction pour lire les données d'un fichier CSV
function readCsvFile($filename) {
    $data = array();
    $fileHandle = fopen($filename, 'r');
    if ($fileHandle) {
        $header = fgetcsv($fileHandle);
        while (($row = fgetcsv($fileHandle)) !== false) {
            $data[] = $row;
        }
        fclose($fileHandle);
    }
    return $data;
}


?>
