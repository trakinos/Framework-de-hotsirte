<?php
	/**
	 *
	 */
	// class Pagina
	// {
	// 	function __construct(argument)
	// 	{
	// 		global $menu_item;
	// 		global $nomedosite;
	// 		global $hasmap;
	// 		global $preendereco;
	// 		global $nivoslider;
	// 		global $slickcar;
	// 		global $lightbox;
	// 		global $titulo;
	// 		global $diretorio;
	//
	// 	}
	// }

	//include_once($preendereco."includes/menu_fixo_format.php");
	//include_once($preendereco."includes/menu_simples.php");
	$chars_quebrados = array( " | ", ".", " ", "ç", "ã", "é", "õ", "í");
	$chars_fixed = array("", "", "_", "c", "a", "e", "o", "i");
	$pagid = strtolower($titulo);
	$pagid_final = str_replace($chars_quebrados, $chars_fixed, $pagid);
	$div_dir = "/";
	include_once($preendereco."includes/menu_logocentro.php");
	function main_menu_print(){
		global $preendereco;
	    echo "<div class=\"menu\">\n";
	    echo "<div class=\"logo_mobile_side\"><a href=\"".$preendereco."index.php\"><img alt=\"".$nomedosite."\" src=\"".$preendereco."images/base/logo_topo.png\" /></div></a>\n";
	    echo "<div class=\"menu_inside\">\n";
	    break_menu_fixo();
	    echo "</div>\n"; //menu_inside
	    echo "</div>\n"; //menu
	}
	function main_menu_fixo_print(){
		global $preendereco;
	    echo "<div class=\"menu\">\n";
	    echo "<div class=\"menu_inside\">\n";
	    break_menu_fixo();
	    echo "</div>\n"; //menu_inside
	    echo "</div>\n"; //menu
	}
	function mobile_menu_print(){
		global $preendereco;
	    echo "<div class=\"menu\">\n";
	    break_menu_fixo();
	    echo "</div>\n"; //menu
	}
	function menu_inferior($array){
		echo "\t<div class=\"submenu\">\n";
		$y = count($item)-1;
		$path = strtolower($item[0]);
    	$path_final = str_replace($chars_quebrados, $chars_fixed, $path);

		$i = 0;
		while ($i <= $y):
			$subpath = strtolower($item[$i]);
        	$subpath_final = str_replace($chars_quebrados, $chars_fixed, $subpath);
        	echo "\t\t<a href=\"".$path_final.".php/".$subpath_final."\" class=\"submenu_item_lk ".$path_final."\"><div class=\"submenu_item ".$path_final."\">".$item[$i]."</div></a>\n";
		    $i++;
		endwhile;

        echo "\t</div>\n";
	}

	function footer(){
		global $preendereco;
		$footer = $preendereco."includes/footer.php";
		include_once($footer);
	}
	function bloco($a){
		global $preendereco;
		$bloco_print = $preendereco."includes/".$a."_bloco.php";
		include_once($bloco_print);
	}
	function titulo_h($a){
		global $preendereco;
		echo "<div class='titulos_ornamentados' style='background-image:url(".$preendereco."images/base/titulo_home_".$a.".jpg);' >";
		echo "<img class='seta_titulo' src='".$preendereco."images/base/seta_titulos.png' />";
		echo "</div>";
	}
	function get_data($a){
		global $preendereco;
		$row = 0;
		$arquivo = $preendereco."includes/".$a.".csv";
		$arq_info = $preendereco."includes/".$a."_info.php";
		if (($handle = fopen($arquivo, "r")) !== FALSE) {
			include_once($arq_info);
			fclose ($handle);
		}
	}
	function legenda($a, $b) {
		?>
		<div class="legenda">
			<div class="legblack1"><?php echo $a; ?></div>
			<div class="legwhite2"><?php echo $b; ?></div>
		</div>
		<?php
	}
	include_once($preendereco."includes/_head.php");
