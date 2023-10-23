<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src');

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
	'indentation_type' => true,
])
	->setIndent("\t")
	->setFinder($finder);
