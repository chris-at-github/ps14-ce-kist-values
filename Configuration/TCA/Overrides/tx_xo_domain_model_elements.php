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
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.purple-white', 'purple-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.blue-white', 'blue-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.yellow-white', 'yellow-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.red-white', 'red-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.darkgrey-white', 'darkgrey-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.orange-white', 'orange-white'],
				['LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.color_scheme.turquoise-white', 'turquoise-white'],
			],
		],
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_xo_domain_model_elements', $tmpKistValuesElementsColumns);