<?php
require "vendor/autoload.php";

use jose\sobre\aboutNamespace;
// Instancia de name
$about = new aboutNamespace;
echo $about->namespace() . PHP_EOL;

use jose\sobre\porsche\nineeleven;
// Instancia de name
$porsche = new nineeleven;
echo $porsche->launch() . PHP_EOL;
echo $porsche->turbo() . PHP_EOL;
echo $porsche->internalName() . PHP_EOL;

use jose\sobre\audi\rs2;
$audi = new rs2;
echo $audi->launch() . PHP_EOL;
echo $audi->wheels() . PHP_EOL;

use jose\sobre\namespaces\name, jose\sobre\namespaces\local, jose\sobre\namespaces\fundos as fundo;
use jose\sobre\namespaces\porsche, jose\sobre\namespaces\ferrari, jose\sobre\namespaces\volkswagen;
use jose\sobre\namespaces\endereco, jose\sobre\namespaces\evenodd, jose\sobre\namespaces\iseven;
use jose\sobre\namespaces\modifiers, jose\sobre\namespaces\inherit, jose\sobre\namespaces\car;
use jose\sobre\namespaces\constant, jose\sobre\namespaces\implementClass, jose\sobre\namespaces\staticMethods;
use jose\sobre\namespaces\staticProperties, jose\sobre\namespaces\xmlFile;

// Instancia de name
$espaco = new name;
echo $espaco->space() . PHP_EOL;

// instancia de local
local::onde();

// instancia de fundo
$fundo = new fundo;
echo $fundo->quintal() . PHP_EOL;

// instancia de porsche
$porsche = new porsche;
echo $porsche->carrera() . PHP_EOL;

// instancia de ferrari
$ferrari = new ferrari;
echo $ferrari->california() . PHP_EOL;
echo $ferrari->cor("Amarela") . PHP_EOL;

// instancia de volkswagen
$volkswagen = new volkswagen;
echo $volkswagen->golf() . PHP_EOL;

// instancia de endereco
$endereco = new endereco;
$endereco->arquivo = $_SERVER['PHP_SELF'];
echo "Endereço: " . $endereco->endereco() . PHP_EOL;

// instancia de evenodd
$parouimpar = new evenodd(1, 3);

// instancia de iseven
$isEven = new iseven;
echo $isEven->iseven(267) ? "Par" . PHP_EOL : "Impar" . PHP_EOL;
// echo var_dump($parouimpar->test(669));

// instancia de modifiers
$modifier = new modifiers;
echo $modifier->getModifiers("String de Modifier") . PHP_EOL;

// instancia de inherit
$inherit = new inherit;
echo $inherit->kid() . PHP_EOL;

// instancia de const
$constant = new constant;
echo $constant->constant() . PHP_EOL;

// Create objects from the child classes
$german = new car("Porsche Cayman");
echo $german->intro() . PHP_EOL;

// instancia de interface
$interface = new implementClass;
echo $interface->interface() . PHP_EOL;

// instancia de staticMethodos
staticMethods::welcome() . PHP_EOL;

// instancia de staticProperties
echo staticProperties::$value . PHP_EOL;

// instancia de XML
$xml = new xmlFile;
echo $xml->lerXml();

// is_object testa se é um objeto ou não
if (is_object($espaco)) {
    echo "É objeto" . PHP_EOL;
} else {
    echo "Não é" . PHP_EOL;
}