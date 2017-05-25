<?php
$titulo = "Home";
// $diretorio = "diretorio";
include_once("includes/config.php");
// VARIAVEIS
$slickcar = TRUE;
$hasmap = TRUE;
include_once("includes/_vars.php");
?>



<?php
break_menu();
$lista = array("Escritório", "Salão de Festas");

$a = new MASONRY($lista);
 include_once("includes/_footer.php");
