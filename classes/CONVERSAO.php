<?php
  class CONVERSAO {
    public $directory;
    private $template;
    public $files;
    public $num;
    private $tipo = array (
      "Telefone" => array("Telefone", "tel_tr", "contato/telefone.php","phone-icon", "texto maluco"),
      "Chat" => array("Chat-Online", "chat_tr", "contato/chat.php","chat-icon", "texto maluco"),
      "Localização" => array("Localização", "local_tr", "localizacao","location-icon", "texto maluco")
    );
    private $estilo; //lateral, embaixo, botoes
    private $miolo = array();
    // var_dump($files);
    private $placeholders = array("\$item\$", "\$trigger\$", "\$path_final\$", "\$imagem\$", "\$texto\$", "\$preendereco\$");
    private $placetakers;

    function __construct($estilo) {
      global $preendereco;
      if ($estilo != "botoes") {
        $this->template = file_get_contents($preendereco."templates/conversao_item.php");
      } else {
        $this->template = file_get_contents($preendereco."templates/conversao_botao.php");
      }
      $this->estilo = $estilo;
    }
    public function addButton($a, $b = "", $c = "", $d = "", $e = "") {
      if (isset($this->tipo[$a])) {
        if ($b == "") {
          $placeb = $this->tipo[$a][1];
        } else {
          $placeb = $b;
        }
        if ($c == "") {
          $placec = $preendereco.$this->tipo[$a][2];
        } else {
          $placec = $c;
        }
        if ($d == "") {
          $placed = $preendereco.$this->tipo[$a][3];
        } else {
          $placed = $d;
        }
        if ($e == "") {
          $placee = $preendereco.$this->tipo[$a][4];
        } else {
          $placee = $e;
        }
        $this->placetakers = array($this->tipo[$a][0], $placeb, $placec, $placed, $placee, $preendereco);
      } else {
        $this->placetakers = array($a, $b, $c, $d, $e, $preendereco);
      }
      $itemplus = str_replace($this->placeholders, $this->placetakers, $this->template);
      $this->miolo[] = $itemplus;
      // var_dump($this->miolo);
    }
    function __destruct() {
      echo "<nav id=\"conversao_".$this->estilo."\">";
      foreach ($this->miolo as $item) {
        echo $item;
      }
      echo "</nav>";
      if ($this->estilo != "botoes") {
        echo "
        <div id=\"overall_300\">
            <div id=\"overall_close_300\"></div>
            <iframe class=\"frame_300\" src=\"\"></iframe>
            <div class=\"close_over\"></div>
        </div>
        <div id=\"overall_600\">
            <div id=\"overall_close_600\"></div>
            <iframe class=\"frame_600\" src=\"\"></iframe>
            <div class=\"close_over\"></div>
        </div>";
      }

    }
  }
 ?>
