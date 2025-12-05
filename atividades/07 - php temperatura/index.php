<?php
// Isabel Barcelos 11251101322

// declarando a variável
$temperatura = 10;

// estrutura de decisão
if ($temperatura < -10) {
    echo "Perigo! Frio extremo!";
} elseif ($temperatura < 0) {
    echo "A temperatura é " . $temperatura . "°C. Está Congelando!";
} elseif ($temperatura >= 0 && $temperatura <= 15) {
    echo "A temperatura é " . $temperatura . "°C. Está frio.";
} elseif ($temperatura >= 16 && $temperatura <= 25) {
    echo "A temperatura é " . $temperatura . "°C. Clima agradável.";
} elseif ($temperatura > 25 && $temperatura <= 40) {
    echo "A temperatura é " . $temperatura . "°C. Está calor!";
} elseif ($temperatura > 40) {
    echo "A temperatura é " . $temperatura . "°C. Cuidado! Risco de insolação!";
}
?>