<?php
  class MASONRY
  {
    function __construct($lista)
    {
      global $chars_quebrados;
      global $chars_fixed;
      global $preendereco;
      global $diretorio;
      echo "<section class='area'>";
        echo "<div class='content'>";
        $b = 0;
          foreach ($lista as $item) {
          	$itemid = strtolower($item);
          	$item_final = str_replace($chars_quebrados, $chars_fixed, $itemid);
            if (isset($diretorio)) {
              $c = $diretorio;
            } else {
              $c = "home";
            }
            echo "
            <a rel=\"lightbox[galeria]\" title='".$item."' href='".$preendereco."images/".$c."/masonry/lightbox/".$item_final.".jpg' />
              <div class='gal_item'>
                <img src='".$preendereco."images/".$c."/masonry/thumbs/".$item_final.".jpg' />
                <div class='legenda'>
                <p>
                ".$item."
                </p>
                </div>
              </div>
            </a>";
            $b++;
          }
        echo "</div>";
      echo "</section>";
    }
  }

 ?>
