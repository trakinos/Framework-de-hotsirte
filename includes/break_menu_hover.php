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
	    	if (!is_array($item)){
		    		if ($item == $titulo) {
			        	$path = strtolower($item);
			        	$path_final = str_replace($chars_quebrados, $chars_fixed, $path);
			        	if ($path_final == "home") {
			        		if ($homeselected == TRUE) {
				        		echo "\t<a href=\"".$preendereco."\" class=\"menu_item_lk selected ".$path_final."\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
			        		} else {
				        		echo "\t<a href=\"".$preendereco."\" class=\"menu_item_lk ".$path_final."\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
			        		}
			        	} else {
				        	echo "\t<a href=\"".$preendereco.$path_final."\" class=\"menu_item_lk ".$path_final." selected\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
			        	}
			        } else {

			        	$path = strtolower($item);
			        	$path_final = str_replace($chars_quebrados, $chars_fixed, $path);
			            if ($path_final == "home") {
				        	echo "\t<a href=\"".$preendereco."\" class=\"menu_item_lk ".$path_final."\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
			        	}
			        	elseif ($path_final == $diretorio) {
				        	echo "\t<a href=\"".$preendereco.$path_final."\" class=\"menu_item_lk ".$path_final." selected\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
			        	} else {
				        	echo "\t<a href=\"".$preendereco.$path_final."\" class=\"menu_item_lk ".$path_final."\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item."</div></a>\n";
			        	}
			        }
	    		} else {
	    			//Se FOR ARRAY -- SUBMENUS
/* 	    			var_dump($item); */
					$y = count($item)-1;
					$path = strtolower($item[0]);
		        	$path_final = str_replace($chars_quebrados, $chars_fixed, $path);


	    			if ($path_final == $diretorio) {
	    				echo "<div class=\"menu_item_wsub selected\">\n";
			        	echo "\t<a href=\"".$preendereco.$path_final."\" class=\"menu_item_lk ".$path_final." selected\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final." selected\">".$item[0]."</div></a>\n";
		        	}
		        	else {
		        		echo "<div class=\"menu_item_wsub\">\n";
		        		echo "\t<a href=\"".$preendereco.$path_final."\" class=\"menu_item_lk ".$path_final."\"><hr class=\"hover_menu\" /><div class=\"menu_item ".$path_final."\">".$item[0]."</div></a>\n";
		        	}

	    			echo "\t<div class=\"submenu tem".$y."\">\n";
		    		$i = 1;
					while ($i <= $y):
						if ($item[$i] == "Seropédica") {
							echo "\t\t<a href=\"".$preendereco.$path_final."/seropedica.php\" class=\"submenu_item_lk seropedica\"><div class=\"submenu_item seropedica\">".$item[$i]."</div></a>\n";
						} else {
							$subpath = strtolower($item[$i]);
							$subpath_partial = str_replace($chars_quebrados, $chars_fixed, $subpath);
				        	$subpath_final = $subpath_partial.".php";
				        	if (($subpagina == $subpath_partial) AND ($path_final == $diretorio)) {
					        	echo "\t\t<a href=\"".$preendereco.$path_final."/".$subpath_final."\" class=\"submenu_item_lk ".$subpath_partial." selected\"><div class=\"submenu_item ".$subpath_partial."\">".$item[$i]."</div></a>\n";
				        	} else {
					        	echo "\t\t<a href=\"".$preendereco.$path_final."/".$subpath_final."\" class=\"submenu_item_lk ".$subpath_partial."\"><div class=\"submenu_item ".$subpath_partial."\">".$item[$i]."</div></a>\n";

				        	}
						}

					    $i++;
					endwhile;

			        echo "\t</div>\n";



	    			echo "</div>"; //submenu

	    		}
	        }
	}
