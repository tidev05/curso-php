<?php
/* aplicação de estrutura de controle
$ingresso = 550;
$categoria = "vip";

if ($ingresso >= 550 && $categoria == "vip") {
    $valorfinal = $ingresso - ($ingresso * 20) / 100;
    echo "Valor R$:$valorfinal\n";
} elseif ($ingresso >= 200 && $categoria == "vip") {
    $valorfinal = $ingresso - ($ingresso * 10) / 100;
    echo "Valor R$:$valorfinal\n";
}
*/
/*O PHP oferece uma sintaxe alternativa para algumas estruturas de controle; a saber, if, while, for, foreach, e switch.*/
$ingresso = 400;
$categoria = "vip";

if ($ingresso >= 550 && $categoria == "vip"): ?>
    <p>Valor R$: <?php echo $valorfinal = $ingresso - ($ingresso * 20) / 100;
                endif;
                if ($ingresso <= 400 && $categoria == "vip"): ?>
    <p>Valor R$: <?php echo $valorfinal = $ingresso - ($ingresso * 10) / 100;
                endif;
