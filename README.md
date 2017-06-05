# Framework-de-hotsite

Modificar os templates para padronizar itens do site. Os templates se encontram em /templates<br />
<br />
********* HEADER<br />
Alterar a variável dos itens do menu (em /includes/config.php):<br />
3 templates são incluídos na construção do header.
As variáveis disponíveis no item do menu (header/menu_item.php) e no logo são:<br />
$item$ = Nome que aparece no menu<br />
$path_final$ = Link Final do item do menu<br />
$selected$ = onde vai marcar como selecionado, caso seja o caso<br />
$trab_final$ = Nome "de máquina" do item (machine friendly)
<br /><br />
As variáveis dos templates de Header são:<br />
$TIPO$ = Declarado na construção do header.<br />
$PREENDERECO$ = automático com a construção da página<br />
$MENU$ = Onde o menu deve quebrar<br />
$MOBILE_BUTTON$ = Onde o botão de abrir o menu mobile deve se posicionar<br />
<br /><br />
CONSTRUÇÃO<br />
<br />
$header = new HEADER($tipo); // $tipo pode ser mobile | relativo | fixo<br />
// $header->mobile = FALSE; //Descomentar caso queira que o menu mobile não seja impresso.<br />
$header = null;<br />
<br /><br />
<hr />
********* GALERIA<br />
Como nomear/localizar as imagens:<br />
images/DIRETORIO/galeria/TIPODEIMAGEM/NOMEDAIMAGEM.jpg<br />
DIRETORIO: nome do diretório que a página se encontra<br />
TIPODEIMAGEM: thumbs ou lightbox<br />
NOMEDAIMAGEM: Pegar o nome original do item (da legenda) e fazer a limpeza dos caracteres. Tirar os acentos, deixar tudo minúsculas e substituir os espaços por _. Exemplo "Perspectiva artística do salão de festas" - > "perspectiva_artistica_do_salao_de_festas"<br />
<br />
Legendas: Declarar um array com as legendas, na ordem que quer que apareçam<br />
<br />
Declarar, depois, o objeto. exemplo:<br />
$a = new GALERIA($lista)<br />
Sendo $lista o array das legendas.<br />
<br /><br />
********* FOOTER<br />
Para chamar:
$footer = new FOOTER<br />
Na pasta /templates/footer, adicione os arquivos que serão parte do footer.
Até 5 arquivos serão reconhecidos e dividirão automaticamente o footer para comportá-los.
<br /><br />
********* BOTOES DE CONVERSÃO<br />
Para chamar:<br />
$conv = new CONVERSAO($ESTILO$);<br />
$conv->addButton($tipo$);<br />
$conv = null;<br />
<br />
No lugar de $ESTILO$, o estilo do menu de conversão. As opções são:<br />
- lateral<br />
- embaixo<br />
<br />
No lugar de $tipo$, o estilo do menu de conversão. As opções são:<br />
- Telefone<br />
- Chat<br />
- Localização<br />
<br />
Os botoes utilizam o template: templates/conv_item.php<br />
as marcações são:<br />
$item$: Nome que vai levar o botao<br />
$trigger$: nome da classe que sera aplicada no link<br />
$path_final$:Caminho para qual o link sera direcionado<br />
$imagem$: nome da imagem que sera usada no botao<br />
$preendereco$: buscara a variavel preendereco
