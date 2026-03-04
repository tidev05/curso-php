<?php

/*$vari = 'valor titular';              // Atribui o valor 'Bob' a variável $foo
$bar = &$vari;              // Referencia $foo através de $bar.
$bar = "My name is $bar\n";  // Altera $bar...
echo "$bar";
// $foo é alterada também.
?>
*/
/*A palavra-chave global é usada para vincular uma variável de um escopo global a um escopo local.
$a = 1;
$b = 2;

function Soma()
{
    global $a, $b;

    $b = $a + $b;
}

Soma();
echo $b;
$a = 1;
$b = 2;
/*Variáveis estáticas fornecem uma solução para lidar com funções recursivas. A seguinte função 
recursiva conta até 10, utilizando a variável estática $count

function Teste()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        Teste();
    }
    $count--;
}
echo Teste();*/
/*quando um método com variáveis estáticas é herdado (mas não sobrescrito), 
o método herdado não compartilhará as variáveis estáticas do método acima. 
Isso significa que variáveis estáticas nos métodos agora se comportam da mesma forma 
que propriedades estáticas. 
class Foo
{
    public static function counter()
    {
        static $counter = 0;
        $counter++;
        return $counter;
    }
}
class Bar extends Foo {}
var_dump(Foo::counter()); // int(1)
var_dump(Foo::counter()); // int(2)
var_dump(Bar::counter()); // int(3), e antes do PHP 8.1.0 int(1)
var_dump(Bar::counter()); // int(4), e antes do PHP 8.1.0 int(2)*/
// processar.php
