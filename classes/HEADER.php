<?php
  class HEADER {
    private $template;
    private $template_h;
    private $estilo; //fixo, relativo, mobile
    private $menu_items;
    private $placeholders = array("\$item\$", "\$trab_final\$", "\$path_final\$", "\$selected\$");
    private $placetakers;
    private $miolo = "";
    public $mobile = TRUE;
    function __construct($estilo) {
      global $preendereco;
      global $menu_item;
      global $titulo;
      global $chars_quebrados;
      global $chars_fixed;
      $this->template = file_get_contents($preendereco."templates/header/menu_item.php");
      $this->template_h = file_get_contents($preendereco."templates/header/header.php");
      $this->menu_items = $menu_item;
      $this->estilo = $estilo;

      foreach ($this->menu_items as $itens) {
  			$item = $itens[0];
        if ($item == "logo") {
          $this->template = file_get_contents($preendereco."templates/header/menu_logo.php");
        } else {
          $this->template = file_get_contents($preendereco."templates/header/menu_item.php");
        }
  			if (($item == $titulo) OR (($item == "logo") AND ($titulo == "Home"))) {
  				$selected = "selected";
  			} else {
  				$selected = "";
  			}
  			$path_final = $preendereco.$itens[1];
  			$trab = strtolower($item);
  			$trab_final = str_replace($chars_quebrados, $chars_fixed, $trab);
  			$this->placetakers = array($item, $trab_final, $path_final, $selected);
  			$menu_i_final = str_replace($this->placeholders, $this->placetakers, $this->template);
        $this->miolo .= $menu_i_final;
  		}
    }
    public function break_menu() {
      global $preendereco;
      global $titulo;
      global $chars_quebrados;
      global $chars_fixed;

    }
    function __destruct() {
      global $preendereco;
      if ($this->mobile == TRUE) {
        $this->template_h = str_replace("\$MOBILE_BUTTON\$", "<div id=\"open_menu\"> </div>", $this->template_h);
      } else {
        $this->template_h = str_replace("\$MOBILE_BUTTON\$", "", $this->template_h);
      }
      $this->template_h = str_replace("\$PREENDERECO\$", $preendereco, $this->template_h);
      $this->template_h = str_replace("\$TIPO\$", $this->estilo, $this->template_h);
      $this->template_h = str_replace("\$MENU\$", $this->miolo, $this->template_h);
      echo $this->template_h;
    }
  }
 ?>
