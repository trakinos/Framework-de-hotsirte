# Framework-de-hotsite

Modificar os templates para padronizar itens do site. Os templates se encontram em /templates<br />
<br />
********* MENU<br />
As variáveis disponíveis no item do menu são:<br />
$item$ = Nome que aparece no menu<br />
$path_final$ = Link Final do item do menu<br />
$selected$ = onde vai marcar como selecionado, caso seja o caso<br />
$trab_final$ = Nome "de máquina" do item (machine friendly)
<br /><br />
********* MASONRY<br />
Como nomear/localizar as imagens:<br />
images/DIRETORIO/masonry/TIPODEIMAGEM/NOMEDAIMAGEM.jpg<br />
DIRETORIO: nome do diretório que a página se encontra<br />
TIPODEIMAGEM: thumbs ou lightbox<br />
NOMEDAIMAGEM: Pegar o nome original do item (da legenda) e fazer a limpeza dos caracteres. Tirar os acentos, deixar tudo minúsculas e substituir os espaços por _. Exemplo "Perspectiva artística do salão de festas" - > "perspectiva_artistica_do_salao_de_festas"<br />
<br />
Legendas: Declarar um array com as legendas, na ordem que quer que apareçam<br />
<br />
Declarar, depois, o objeto. exemplo:<br />
$a = new MASONRY($lista)<br />
Sendo $lista o array das legendas.<br />

