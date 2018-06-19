<?php

  function getcsvFile($filename){
    $handle = fopen($filename, "r");
    $output = [];
    while(!feof($handle)){
      array_push($output, fgetcsv($handle));
    }
    fclose($handle);
    array_pop($output);
    return $output;
  }

  if(isset($_POST["submitcontact"])){
    $handle = fopen("test.csv", "a");
    $data = [
      $_POST["first"],
      $_POST["last"],
      $_POST["number"]
    ];
    fputcsv($handle, $data);
  }

?>