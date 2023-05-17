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


function generateConfigInit($filename){
  if (($filename = fopen($filename, "r")) !== FALSE) {
    // on passe l'entete
    if (fgetcsv($filename) !== FALSE){
      while (($config = fgetcsv($filename)) !== FALSE) {
        $name_proc   =$config[0];
        $prix_proc   =$config[1];
        $info_proc   =$config[2];
        $ref_proc    =$config[3];
        $socket_proc =$config[4];

        $name_gpu    =$config[5];
        $prix_gpu    =$config[6];
        $info_gpu    =$config[7];
        $ref_gpu     =$config[8];
        
        $name_carte_mere    =$config[9];
        $prix_carte_mere    =$config[10];
        $info_carte_mere    =$config[11];
        $ref_carte_mere     =$config[12];
        $slot_carte_mere    =$config[13];
        $go_carte_mere     =$config[14];
        
        $name_ram       =$config[15];
        $prix_ram       =$config[16];
        $info_ram       =$config[17];
        $ref_ram        =$config[18];
        $stockage_ram   =$config[19];
        $nb_barette_ram =$config[20];

      }				
    }
  }
  fclose($filename); 

  echo '<strong>Processeur</strong> : ',$name_proc,'<br/>';
  echo'<table class="table table-striped"style="width: 1011px">
          <tr>
            <th>Prix</th>
            <th>Information</th>
            <th>Socket</th>
          </tr>
          <tr>
            <td>',$prix_proc,'</td>
            <td>',$info_proc,'</td>
            <td>',$socket_proc,'</td>
          </tr>
        </table>';
  echo '<br/><br/>';
  
  echo '<strong>Carte Graphique</strong> : ',$name_gpu,'<br/>';
    
  echo'<table class="table table-striped"style="width: 1011px">
    <tr>
      <th>Prix</th>
      <th>Information</th>
    </tr>
    <tr>
      <td>',$prix_gpu,'</td>
      <td>',$info_gpu,'</td>
    </tr>
  </table>';
  echo '<br/><br/>';

  echo '<strong>Carte mère</strong> : ',$name_carte_mere,'<br/>';
  echo'<table class="table table-striped"style="width: 1011px">
    <tr>
      <th>Prix</th>
      <th>Information</th>
      <th>Nombre de slot</th>
      <th>Nombre de Go</th>
    </tr>
    <tr>
      <td>',$prix_carte_mere,'</td>
      <td>',$info_carte_mere,'</td>
      <td>',$slot_carte_mere,'</td>
      <td>',$go_carte_mere,'</td>
    </tr>
  </table>';
  echo '<br/><br/>';

  echo '<strong>RAM</strong> : ',$name_ram,'<br/>';
  echo'<table class="table table-striped" style="width: 1011px">
  <tr>
    <th>Prix</th>
    <th>Information</th>
    <th>Stockage</th>
    <th>Nombre de barette</th>
  </tr>
  <tr>
    <td>',$prix_ram,'</td>
    <td>',$info_ram,'</td>
    <td>',$stockage_ram,'</td>
    <td>',$nb_barette_ram,'</td>
  </tr>
</table>';
echo '<br/><br/>';
}

function generateCombi($filename){
  echo '<br/>';
  echo'<table class="table table-striped"style="width: 1011px">
          <tr>
            <th>Alimentation</th>
            <th>Prix</th>
            <th>Boitier</th>
            <th>Prix</th>
            <th>Stockage</th>
            <th>Prix</th>
            <th>Refroidisseur</th>
            <th>Prix</th>
            <th>Total</th>
          </tr>';
  /*$i=0;
  if (($filename = fopen($filename, "r")) !== FALSE) {
    // on passe l'entete
    if (fgetcsv($filename) !== FALSE){
      while (($config = fgetcsv($filename)) !== FALSE) {
        $name_alim          = $config[1];
        
        $prix_alim          = $config[2];

        $name_boitier       = $config[3];
        $prix_boitier       = $config[4];

        $name_stockage      = $config[5];
        $prix_stockage      = $config[6];

        $name_refroidisseur = $config[7];
        $prix_refroidisseur = $config[8];

        $prix_total         = $config[9];

        echo '<tr>
                <th>',$name_alim,'</th>
                <th>',$prix_alim,'</th>
                <th>',$name_boitier,'</th>
                <th>',$prix_boitier,'</th>
                <th>',$name_stockage,'</th>
                <th>',$prix_stockage,'</th>
                <th>',$name_refroidisseur,'</th>
                <th>',$prix_refroidisseur,'</th>
                <th>',$prix_total,'</th>
              </tr>';
      }			
    }
  }
  fclose($filename); */
  echo' </table>';
  echo '<br/><br/>';
  
}

?>
