<?php
declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);

echo $variableNonDefinie;


require __DIR__ . '/../src/utils.php';
echo bonjour("Étudiant");

spl_autoload_register(function ($class){
    require __DIR__ . '/../src/' . $class . '.php';
});

$p = new Personne();
echo $p->salue()."\n";


        


function addition(int $a, int $b): int {
    return $a + $b;
}

echo addition(4, 6);

function division(int $a, int $b): float {
    if ($b === 0) {
        throw new Exception("Division par zéro interdite");
    }
    return $a / $b;
}

try {
    echo division(10, 0);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}



