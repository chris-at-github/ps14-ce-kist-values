<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Kist Values',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'state' => 'beta',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0-10.4.99',
			'xo' => '1.0.11-1.99.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
	'autoload' => [
		'psr-4' => [
			'Ps14\\CeKistValues\\' => 'Classes',
		],
	],
];