<?php
// ---------------------------------------------------------------------------------------------------------------------
// Weitere Felder in TT-Content
$tmpKistValuesElementsColumns = [
	'tx_ce_kist_values_color_scheme' => [
		'exclude' => true,
		'l10n_mode' => 'exclude',
		'label' => 'LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'default' => '',
			'items' => [
				['', ''],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.green-white', 'green-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.white-black', 'white-black'],
			],
		],
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_xo_domain_model_elements', $tmpKistValuesElementsColumns);