- VARIAVEIS:

$nome = "vinicius";

$idade = "22";

echo e print são usado pra mostrar algo em html
echo 'comando echo'
print 'comando print'

/Linguagem de escopo de tipagem dinâmico 

- CONCATENAÇÃO EM STRINGS:

	-Aspas simples
	$simples = 'ola' . $nome . ', você tem '. $idade . 'anos';

//Aspas duplas
$duplas = "ola $nome, você tem $idade anos";

-Variaveis constantes:

define("NOME_VARIAVEL", "valor da variavel");

//acessando a variavel constante
echo NOME_VARIAVEL;

-Operadores lógicos incomuns:

operador de diferente !==

-Operador ternário

<condição> ? Oq fazer se for true : oq fazer se for false

$maior_de_idade = $idade> 18 ? "Esta pessoa é maior de idade" : "Esta pessoa ainda é menor de idade";

- Switch

$opcao = 2;

switch(opcao){
	case 1:
		// faz oq tiver q fazer
	case 2:
		// faz outra coisa
	default:
		break;

}

- Casting

$variavel_int = 10;
$double_var = 12.2;

$other_int = (integer) $double_var;  // valor do inteiro será 12

$variavel_double = (float) $variavel_int;

$variavel_string = (String) $variavel_int;


- Função 

function calcula($var1, $var2){
	
	return $var1+$var2;
}
 
- Array

//construtor
$list_Nomes = array('vini', 'paulo', 'arlindo');
$list_Nomes = ['vini', 'paulo', 'arlindo'];
$list_associativo = array('user' => 'vini');

//acessando valor
$list_associativo[user];	// saída : vini



//adicionando
$list_Nome[] = 'nessa';


