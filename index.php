<?php
$titulo = "Home";
// $diretorio = "diretorio";
include_once("includes/config.php");
// VARIAVEIS
$parallax = TRUE;
$slickcar = TRUE;
include_once("includes/_vars.php");
?>
<script>
$(document).ready(function() {
  var scrollorama = $.scrollorama({ blocks:'.scrollblock' });
  scrollorama
    // .animate('#home_diferenciais',{ duration: 400, property:'background-position-x', start:100, end:1 });
  var scrollorama2 = $.scrollorama({ blocks:'#banner' });
  scrollorama
    // .animate('#banner .content',{ duration: 600, property:'background-position-y', start:1, end:100 });
});
</script>



<?php
break_menu();
 include_once("includes/_footer.php");
