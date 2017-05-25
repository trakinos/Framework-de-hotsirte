# Framework-de-hotsite

Modificar os templates para padronizar itens do site. Os templates se encontram em /templates

********* MENU
As variáveis disponíveis no item do menu são:<br />
$item$ = Nome que aparece no menu
$path_final$ = Link Final do item do menu
$selected$ = onde vai marcar como selecionado, caso seja o caso
$trab_final$ = Nome "de máquina" do item (machine friendly)

********* MASONRY
Como nomear/localizar as imagens:
images/DIRETORIO/masonry/TIPODEIMAGEM/NOMEDAIMAGEM.jpg
DIRETORIO: nome do diretório que a página se encontra
TIPODEIMAGEM: thumbs ou lightbox
NOMEDAIMAGEM: Pegar o nome original do item (da legenda) e fazer a limpeza dos caracteres. Tirar os acentos, deixar tudo minúsculas e substituir os espaços por _. Exemplo "Perspectiva artística do salão de festas" - > "perspectiva_artistica_do_salao_de_festas"

Legendas: Declarar um array com as legendas, na ordem que quer que apareçam

Declarar, depois, o objeto. exemplo:
$a = new MASONRY($lista)
Sendo $lista o array das legendas.

