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
		// include_once($preendereco.'includes/_menu.php');

		foreach ($menu_item as $itens) {
			$placeholders = array("\$item\$", "\$trab_final\$", "\$path_final\$", "\$selected\$");
			$item = $itens[0];
			if (($item == $titulo) OR (($item == "logo") AND ($titulo == "Home"))) {
				$selected = "selected";
			} else {
				$selected = "";
			}
			$path_final = $preendereco.$itens[1];
			$trab = strtolower($item);
			$trab_final = str_replace($chars_quebrados, $chars_fixed, $trab);

			$placetakers = array($item, $trab_final, $path_final, $selected);
			$menu_form = file_get_contents($preendereco."templates/menu_item.php");
			$menu_i_final = str_replace($placeholders, $placetakers, $menu_form);
			echo $menu_i_final;
		}

	}
