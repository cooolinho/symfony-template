<?php

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->in(__DIR__ . '/symfony/src');

return (new PhpCsFixer\Config())->setRules([
    '@PHP71Migration' => true,
    '@PHPUnit75Migration:risky' => true,
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'protected_to_private' => false,
    'native_constant_invocation' => ['strict' => false],
    'nullable_type_declaration_for_default_null_value' => ['use_nullable_type_declaration' => false],
    'no_superfluous_phpdoc_tags' => ['remove_inheritdoc' => true],
    'modernize_strpos' => true,
    'get_class_to_class_keyword' => true,
])
    ->setFinder($finder);
