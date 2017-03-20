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

	include_once($preendereco."includes/break_menu_novo.php");
	$chars_quebrados = array( " | ", ".", " ", "ç", "ã", "é", "õ", "í");
	$chars_fixed = array("", "", "_", "c", "a", "e", "o", "i");
	$pagid = strtolower($titulo);
	$pagid_final = str_replace($chars_quebrados, $chars_fixed, $pagid);
	$div_dir = "/";
	

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
