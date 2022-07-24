<?php
// Concatenando strings utilizando ponto
$a = "Joao" . " " . "Ribeiro";

$b = "Joãozinho";
$b .= " " . "Ribeiro"; 

// .= faz a concatenação com o valor já existente na string

echo $b;
// die();  # Utilizado para parar o código nesse ponto (se tiver código antes)

$nome = 'João';
$sobrenome = "Ribeiro";

/* Com as aspas duplas é possível englobar variáveis (Parse). 
Com aspas simples as variáveis não são interpretadas */
$nome_completo = "$nome $sobrenome";

echo $nome_completo;

// HEREDOC e NOWDOC (outras formas de delimitação)
// Apesar de não serem muitos comuns, podem ser usadas para tratamento de maiores blocos de texto;

// HEREDOC - Permite fazer o parse de variáveis
$cliente = "João Ribeiro";
$email = "joaoribeiro@mail.com";

$texto = <<<LABEL
Olá, sr. $cliente.
A presente mensagem serve para informar que você já se encontra inscrito no próximo teste.
Enviamos as informações para seu e-mail $email.

Obrigada pela sua simpatia.
LABEL;

echo $texto;

// NOWDOC
// Utiliza aspas simples na LABEL, o que não permite parse de variáveis
$texto = <<<'LABEL'
Olá, sr. $cliente.
A presente mensagem serve para informar que você já se encontra inscrito no próximo teste.
Enviamos as informações para seu e-mail $email.

Obrigada pela sua simpatia.
LABEL;

// Funções para operar com Strings

$frase = "Tenho uma frase"
strlen($frase); # retorna o número de caracteres da string
substr($frase, 0, 4); # retorna as letras a partir da posição 0 e durante 4 caracteres
strtoupper($frase); # MAIÚSCULAS
strtolower($frase); # minúsculas
str_replace('a', 'x', $frase); # retorna "Tenho umx frxse"
strpos($frase); # verifica a posição de um caractere dentro da string

// No PHP 8 foram introduzidas mais algumas funções

$nome = "Ana Maria Silva Cardoso";
$x = str_contains($nome, "Silva"); # true

$x = str_starts_with($nome, "Ana"); #true
$x = str_starts_with($nome, "ana"); #false

$x = str_ends_with($nome, "oso"); #true
$x = str_ends_with($nome, " oso"); #false
