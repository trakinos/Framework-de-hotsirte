<?php
$titulo = "Telefone";
$diretorio = "contato";
include_once("../includes/config.php");
// VARIAVEIS
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $nomedosite; ?> | <?php echo $titulo; ?></title>
		<link rel="icon" type="image/png" href="<?php echo $preendereco.$shortcut_icon ?>" />
		<link rel="shortcut icon" href="<?php echo $preendereco.$shortcut_icon ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="stylesheet" media="screen" href="../css/telefone.css" type="text/css" />

  </head>
  <body>
    <img src="../<?php echo $caminhologo; ?>" />
    <hr />
    <?php echo $telefone; ?>
  </body>
</html>
