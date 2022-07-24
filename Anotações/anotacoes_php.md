# ANOTAÇÕES

## Localizando projetos PHP

Os projetos PHP rodam na pasta do sistema /var/www

/var/www/php-lessons foi a pasta que eu criei para o primeiro projeto.

## PHP com HTML

Para criar scripts PHP, os arquivos devem ter a extensão .php. Se o arquivo não tiver código em linguagem PHP, mas tiver em HTML, o compilador vai entender que é apenas HTML e vai rodar sem problemas. 

No entanto, se o arquivo for .html e tiver um código de php dentro (<?php Código ?>), ele não vai funcionar. O arquivo tem que estar sempre em PHP, mesmo que tenha HTML dentro.

Scripts puros de PHP não necessitam de tag de fechamento. Ex: <?php (basta abrir a tag)

## Apresentação de conteúdo em PHP

echo e print funcionam basicamente da mesma forma e são utilizados para printar resultados na tela.

<?php 
echo "php";
print "php";

## Comentários em PHP

Pode ser adicionado com 
// ou # ou 
/* assim */

## Variáveis

__São definidas com $ e o nome da variável__
$nome_da_variavel;

__Definir e iniciar uma variável__
$nome_da_variavel = 100;
echo $nome_da_variavel;

__Convenções PHP Standard Conventions__
$umaVariavel = 0; # camel case
$uma_variavel = 1; # snake case
$UmaVariavel = 2; # studly case (não recomendado)

## Tipos de Dados

