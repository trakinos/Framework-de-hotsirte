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
<div class="area" id="banner">
    <div class="content">
      <div id="descritivo">
        <img class="tit_txt" src="images/titulos/banner_title.png" />
        <p><span class="bold">O Selenita é para quem gosta de novos ares e de curtir a vida.</span><br />Com uma arquitetura moderna, é único na região e oferece um novo<br /> estilo de viver, com facilidades incríveis no próprio condomínio.</p>
        <div class="destaque">
          Pronto em Abril 2017
        </div>
      </div>
    </div>
    <div class="seta_baixo">

    </div>
</div>

    <!--<div class="area scrollblock">
      <div class="content" id="home_conceito">
        <h2 class="comfundo">
          <span>Um convite para viver</span> um novo estilo de vida
        </h2>
        <p> Ótimo para morar ou investir, o Selenita oferece uma infraestrutura completa e localização estratégica que te deixa perto de tudo o que Barueri tem de melhor. São plantas perfeitas para casais ou pessoas solteiras, em apartamentos com metragens ideais para o seu novo estilo de vida.</p>
        <div class="botao_atalho">Conceito</div>
      </div>-->

      <div class="content" id="home_diferenciais">
        <img class="tit_txt" src="images/titulos/diferenciais_title.png" />
        <hr class="fundofalso" />
        <p> O Selenita é para quem gosta de novos ares e curtir a vida. Com uma arquitetura moderna, é único na região e oferece um novo estilo de viver, com facilidades incríveis no próprio condomínio.</p>
        <div class="detalhes">
          <div class="detalhes_preto">
            <h3><b>Entrada facilitada e saldo em até</b></h3>
            <h2>360 meses</h2>
          </div>
          <div class="detalhes_preto">
            <h3><b>A partir de</b></h3>
            <h2>R$ 286.000,00<br /></h2>
            <p class="pagamento">À vista</p>
          </div>
        </div>
        <div class="botao_atalho">Diferenciais</div>
      </div>
    </div>

    <div class="area" id="home_apartamentos">
      <div class="content">
        <img class="tit_txt" src="images/titulos/apartamentos_title.png" />
        <p>Apartamentos studio e duplex pensados nas suas necessidades com espaços otimizados, trazendo um grande conforto e facilidade para seu novo estilo de vida.</p>
        <div class="detalhes_preto">
          <h3><b>Apartamentos duplex</b></h3>
          <h2>Com 55m²</h2>
        </div>
        <div id="mosaico_aptos">
          <img class="img_1" src="images/mosaicos/img_mosaico_1.jpg" />
          <img class="img_2" src="images/mosaicos/img_mosaico_3.jpg" />
          <img class="img_3" src="images/mosaicos/img_mosaico_4.jpg" />
        </div>
        <div class="botao_atalho">Apartamentos</div>
      </div>
    </div>

    <div class="area" id="home_galeria">
      <div class="content">
        <img class="tit_txt" src="images/titulos/galeria_title.png" />
        <p>Leve uma vida descomplicada. O Selenita tem tudo que você precisa</p>
        <div class="content content_galeria">
          <img id="completo_mos" src="images/mosaicos/completo_galeria.png" />
          <div id="mosaico_galeria">
            <img class="img_1" src="images/mosaicos/img_mosaico_2_1.jpg" />
            <img class="img_2" src="images/mosaicos/img_mosaico_2_2.jpg" />
            <img class="img_3" src="images/mosaicos/img_mosaico_2_3.jpg" />
            <img class="img_4" src="images/mosaicos/img_mosaico_2_4.jpg" />
          </div>
          <div class="botao_atalho">Galeria</div>
        </div>
      </div>
    </div>


<?php include_once("includes/_footer.php");
