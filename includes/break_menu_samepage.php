<?php
function break_menu() {
		global $menu_item;
	    global $preendereco;
	    global $titulo;
	    global $chars_quebrados;
	    global $chars_fixed;
	    global $diretorio;
	    global $subpagina;
	    global $tit_clean;
	    global $homeselected;
		foreach ($menu_item as $item) {
	        	$path = strtolower($item);
	        	$path_final = str_replace($chars_quebrados, $chars_fixed, $path);
		        	echo "\t<a href=\"#".$path_final."\" class=\"menu_item_lk ".$path_final."\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
	        }
	}
