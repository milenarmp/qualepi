<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?=$tituloPagina?></title>
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <!-- inclusão do plugin DataTables -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?=base_url("css/style.css") ?>">
    <link rel="stylesheet" href="<?=base_url("css/barraLateral.css") ?>">
	<link rel="stylesheet" href="<?=base_url("assets/DataTables/datatables.min.css") ?>">
	<script src="<?=base_url("assets/js/datatable.js") ?>"></script>
	<script src="<?=base_url("assets/DataTables/datatables.min.js") ?>"></script>
	<link rel="stylesheet" href="<?=base_url("css/font-awesome.min.css") ?>">
	<link href="https://fonts.googleapis.com/css?family=Literata&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7904369503.js" crossorigin="anonymous"></script>
	<script>
	</script>
  </head>