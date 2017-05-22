<?php
// Itens do Menu
	$menu_item = array(
		array("Menu Item 1", "menu/item1"),
		array("Menu Item 2", "menu/item2"),
		array("Menu Item 3", "menu/item3"),
		array("Menu Item 4", "menu/item4"));



/* 	HOME MOSTRA SELECIONADA */
	$homeselected = TRUE;
	// DETALHES DO SITE
	$nomedosite = "Nome do site";
	$slogandosite = "Slogan do Site";
	$caminhologo = "images/home/logo_header.png";
	$shortcut_icon = "images/fav_icon.png";

	// Controle
	// Emails que recebem os contatos, se aplicável
	$quemrecebe = "";
	// Códio de rastreamento do google, ex: UA-56036574-4
	$tag_google = "";

	// Dados do local
	$telefone = "5555 5555";
	$endereco = "Rua X, 444";
	$chat_link = "http://";

	// COORDENADAS DO MAPA
	$coordenadas = "-23.485454, -46.870196";
	$pinmapa = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";

	// Plugins
	$nivoslider = FALSE;
	$slickcar = FALSE;
	$lightbox = FALSE;
	$parallax = FALSE;
	$content_lateral = FALSE;
	$jbgal = FALSE;

	$integracao = array();
	// $integracao[] = "Hypnobox";

  if (isset($subdiretorio) AND isset($diretorio)) {
    $preendereco = "../../";
  }
  elseif (!isset($subdiretorio) AND isset($diretorio)) {
    $preendereco = "../";
  }
  else {
    $preendereco = "";
  }
