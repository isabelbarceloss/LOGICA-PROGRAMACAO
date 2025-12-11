<?php
// Programa para calcular o IMC
// Isabel Barcelos 11251101322
$peso = 70;
$altura = 1.75;

// Cálculo do IMC
$imc = $peso / ($altura * $altura);

echo "Seu IMC é: $imc <br>";


if ($imc < 18.5) {
   echo "Classificação: Magreza (Grau 0)";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
   echo "Classificação: Normal (Grau 0)";
} elseif ($imc >= 25 && $imc <= 29.9) {
   echo "Classificação: Sobrepeso (Grau I)";
} elseif ($imc >= 30 && $imc <= 39.9) {
   echo "Classificação: Obesidade (Grau II)";
} else {
   echo "Classificação: Obesidade Grave (Grau III)";
}
?>