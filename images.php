<?php

header('Content-type: application/json');

$folder = "images/";

echo json_encode(
  glob(
    $folder."*.{jpg,jpeg,gif,png}",
    GLOB_BRACE
  )
);

?>
