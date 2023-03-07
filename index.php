<?php 
  // array data
  $results = array();
  $results = array(
    '0' => array(
      'ON' => '1',
      'Name' => 'Bame A',
    ),
    '2' => array(
      'ON' => '2',
      'Name' => 'Bame B',
    ),
  );
  // header
  header("Content-type: text/xlsx; charset=UTF-8");
  header("Content-Disposition: attachment; filename=name_file");
  // output fopen
  $output = fopen("php://output", "w");
  // array_keys header
  $header = array_keys($results[0]);
  // fputcsv
  fputcsv($output, $header);
  foreach($results as $row) {
    fputcsv($output, $row);
  }
  fclose($output);
  // exit
  exit;
?>
