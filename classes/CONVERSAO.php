<?php
  class CONVERSAO {
    public $directory;
    private $template;
    public $files;
    public $num;
    private $tipo = array (
      "Telefone" => array("Telefone", "tel_tr", "contato/telefone.php","phone-icon"),
      "Chat" => array("Chat-Online", "chat_tr", "contato/chat.php","chat-icon"),
      "Localização" => array("Localização", "local_tr", "localizacao","location-icon")
    );
    private $estilo; //lateral, embaixo
    private $miolo = array();
    // var_dump($files);
    private $placeholders = array("\$item\$", "\$trigger\$", "\$path_final\$", "\$imagem\$", "\$preendereco\$");
    private $placetakers;

    function __construct($estilo) {
      global $preendereco;
      $this->template = file_get_contents($preendereco."templates/conv_item.php");
      $this->estilo = $estilo;
    }
    public function addButton($a, $b = "", $c = "", $d = "") {
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
        $this->placetakers = array($this->tipo[$a][0], $placeb, $placec, $placed, $preendereco);
      } else {
        $this->placetakers = array($a, $b, $c, $d, $preendereco);
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
    }
  }
 ?>
