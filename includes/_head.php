<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $nomedosite; ?> | <?php echo $titulo; ?></title>
		<link rel="icon" type="image/png" href="<?php echo $preendereco.$shortcut_icon ?>" />
		<link rel="shortcut icon" href="<?php echo $preendereco.$shortcut_icon ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
		<?php
			if (!isset($descricao) OR ($descricao = "")){
			?>
			<meta name="description" content="<?php echo $nomedosite; ?> - <?php echo $slogandosite; ?>" />
			<?php
			} else {
			?>
			<meta name="description" content="<?php echo $descricao; ?>" />
			<?php
			}
			if (!isset($keywords) OR ($keywords = "")){
			?>
			<meta name="keywords" content="<?php echo $nomedosite; ?>">
			<?php
			} else {
			?>
			<meta name="keywords" content="<?php echo $keywords; ?>">
			<?php
			}
		?>
		<link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/style.css" type="text/css" />
		<? if ($nivoslider == TRUE) {
			?> <link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/nivo-slider.css" type="text/css" /> <?php
		} ?>

		<link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/lightbox.css" type="text/css" />
		<? if ($slickcar == TRUE) {
			?> <link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/slick.css" type="text/css" />
			<link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/slick-theme.css" type="text/css" /> <?php
		} ?>

		<?php if ($content_lateral == TRUE) { ?>
      <link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/content_lateral.css" type="text/css" />
		<?php } ?>
		<?php if ($jbgal == TRUE) { ?>
      <link rel="stylesheet" media="screen" href="<?php echo $preendereco ?>css/jbgallery-2.0.css" type="text/css" />
		<?php } ?>
  	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<? if ($nivoslider == TRUE) {
			?> <script type="text/javascript" src="<?php echo $preendereco ?>js/jquery.nivo.slider.js"></script>
			<script type="text/javascript" src="<?php echo $preendereco ?>js/modernizr.custom.js"></script> <?php
		} ?>
		<? if ($lightbox == TRUE) { ?>
		<script src="<?php echo $preendereco ?>js/lightbox.js"></script>
		<?php } ?>
		<? if ($slickcar == TRUE) { ?>
		<script type="text/javascript" src="<?php echo $preendereco ?>js/slick.js"></script>
		<?php } ?>


		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $preendereco ?>js/base.js"></script>
		<script type="text/javascript" src="<?php echo $preendereco ?>js/vertmiddle.js"></script>
		<?php if ($parallax == TRUE) { ?>
		<script type="text/javascript" src="<?php echo $preendereco ?>js/jquery.lettering-0.6.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $preendereco ?>js/jquery.scrollorama.js"></script>
		<?php } ?>
		<?php if ($content_lateral == TRUE) { ?>
			<script type="text/javascript" src="<?php echo $preendereco ?>js/content_lateral.js"></script>
		<?php } ?>
		<?php if ($jbgal == TRUE) { ?>
			<script type="text/javascript" src="<?php echo $preendereco ?>js/jbgallery-2.0.js"></script>
		<?php } ?>
<!-- 		AGÊNCIA D1UP -->
        <!--
<script type="text/javascript">
		    $(window).load(function() {
		        $('#inside_banner').nivoSlider({
			        effect: 'fade',
			        controlNav: true
		        });
		    });
	    </script>
-->
	</head>
	<body class="<?php echo $pagid_final."_pg"; ?>">
		<?php include_once($preendereco."includes/google_an.php"); ?>
		<? if ($hasmap == TRUE) {
			include_once($preendereco."includes/map_config.php");
 				}
		include_once($preendereco."includes/tracking.php");
		?>
	<div id="menu_sociais">
		<div class="bot_soc telefone_soc"> </div>
		<div class="bot_soc ende_soc"> </div>
	</div>

<header id="relativo">

		<div class="height_lim"> </div>
		<hr class="faixahead" />
		<?php //mobile_menu_print() ?>
    <!-- <div class="mobile_open"><img src="<?php echo $preendereco ?>images/base/site-birmann-botao-moblie.png" /></div> -->
	</header>

	<header id="fixo">
		<div class="height_lim"> </div>
		<hr class="faixahead" />
		<div class="mobile_logob">
			<a href="<?php echo $preendereco; ?>">
				<img src="<?php echo $preendereco; ?>images/logo_mobile.png" />
			</a>
		</div>
		<div class="mobile_menu">
			<img src="<?php echo $preendereco; ?>images/menu_mobile.png" />
		</div>
		<?php //main_menu_fixo_print() ?>
	</header>
	<div id="topo_espaco"> </div>
	<?php // mobile_menu_print (); ?>
