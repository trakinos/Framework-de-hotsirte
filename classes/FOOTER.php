<?php
  class FOOTER {
    public $directory;
    public $files;
    public $num;
    // var_dump($files);
    function __construct() {
      global $chars_quebrados;
      global $chars_fixed;
      global $preendereco;
      global $diretorio;
      $this->directory = $preendereco."templates/footer";
      $this->files = scandir($this->directory);
      $this->num = count($this->files)-2;
      $classe_divisorias = "resp_".$this->num;
      $b = 1;
      $o = 0;
      echo "<footer>";
        echo "<section class=\"content\">";
      foreach ($this->files as $item) {
        if ($o > $b) {
          $c = $b + 1;
          if ($b < $this->num) {
            echo "<div class=\"responsivo_dividido ".$classe_divisorias."\">";
          } else {
            echo "<div class=\"responsivo_dividido ".$classe_divisorias." last\">";
          }
          include_once ($this->directory."/".$item);
          echo "</div>";
          $b++;
        }
        $o++;
      }

        echo "</section>";
      echo "</footer>";
    }
  }
 ?>
