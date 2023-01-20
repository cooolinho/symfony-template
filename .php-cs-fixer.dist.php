<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . 'symfony/src')
    ->in(__DIR__ . 'bundles/*/src');

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@Symfony' => true,
    'full_opening_tag' => false,
])
    ->setFinder($finder);
