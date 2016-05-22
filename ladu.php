<?php

require 'model.php';

require 'controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $result = false;

  switch ($_POST['action']) {

    case 'lisa_toode':
      $nimetus = $_POST['toote_nimi'];
      $kogus = intval($_POST['toote_kogus']);
      $result = controller_lisa_toode($nimetus, $kogus);
      break;

    case 'kustuta':
      $id = intval($_POST['id']);
      $result = controller_kustuta_toode($id);
      break;

    case 'muuda':
      $id = intval($_POST['id']);
      $kogus = intval($_POST['kogus']);
      $result = controller_muuda_toode($id, $kogus);
      break;

    case 'registreeri':
      $kasutajanimi = $_POST['kasutajanimi'];
      $parool = $_POST['parool'];
      $result = controller_registreeri($kasutajanimi, $parool);
      break;
  }

  if($result){
    header('Location: ' .$_SERVER['PHP_SELF']);

  } else {
    header('Content-type: text/plain; charset=utf-8');
    echo 'Päring eba6nnestunud';
  }
  exit;
}

if (!empty($_GET['view'])) {

  switch ($_GET['view']) {

    case 'registreeri':
      require 'view_register.php';
      break;

    default:
      header:('Content-type: text/plain; Charset=utf-8');
      echo 'Tundmatu valik!';
      exit;
    }
  } else {
    require 'view.php';
}

mysqli_close($l);
