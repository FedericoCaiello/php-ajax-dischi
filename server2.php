<?php
include 'server.php';
$author = $_GET['author'];
if (empty($author) || $author === 'Tutti i generi') {
  header('Content-Type: application/json');
  echo json_encode($database);
}else {
  $cdFilter = [];
  foreach ($database as $cd) {
    if ($cd['author'] === $author) {
      $cdFilter[] = $cd;
    }
  }
  if (empty($cdFilter)) {
    $cdFilter = [
        [
          'title' => 'Non ci sono titoli',
          'author' => 'Non ci sono autori',
          'year' => 'Non ci sono anni',
          'poster' => 'https://image.shutterstock.com/image-vector/404-not-found-problem-disconnect-600w-721322569.jpg'
        ]
      ];
  }
  header('Content-Type: application/json');
  echo json_encode($cdFilter);
}
 ?>
