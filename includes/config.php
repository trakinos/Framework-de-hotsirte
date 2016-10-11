<?php
// Itens do Menu
	$menu_item = array("Home", "Apartamentos", "Lazer", "Vídeo", "logo", "Galeria", "Localização", "Realização", "Contato");



/* 	HOME MOSTRA SELECIONADA */
	$homeselected = TRUE;
	// DETALHES DO SITE
	$nomedosite = "Acqua Park Alphaville";
	$slogandosite = "Sua praia em Alphaville";
	$caminhologo = "images/home/logo_header.png";
	$shortcut_icon = "images/fav_icon.png";

	// COORDENADAS DO MAPA
	$coordenadas = "-23.485454, -46.870196";
	$pinmapa = "images/home/pin_mapa.png";
	// Plugins
	$nivoslider = FALSE;
	$slickcar = FALSE;
	$lightbox = FALSE;
	$parallax = FALSE;
	$content_lateral = FALSE;
	$jbgal = FALSE;

  if (isset($subdiretorio) AND isset($diretorio)) {
    $preendereco = "../../";
  }
  elseif (!isset($subdiretorio) AND isset($diretorio)) {
    $preendereco = "../";
  }
  else {
    $preendereco = "";
  }
