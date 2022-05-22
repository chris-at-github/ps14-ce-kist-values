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

$GLOBALS['TCA']['tx_xo_domain_model_elements']['types']['ce_kist_values_default']['columnsOverrides']['media'] = [
	'l10n_mode' => 'exclude',
	'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
		'media',
		[
			'overrideChildTca' => [
				'columns' => [
					'crop' => [
						'config' => [
							'cropVariants' => [
								'thumbnail' => [
									'title' => 'LLL:EXT:xo/Resources/Private/Language/locallang_tca.xlf:tx_xo_crop_variant.thumbnail',
									'allowedAspectRatios' => [
										'NaN' => [
											'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
											'value' => 0.0
										],
									],
									'selectedRatio' => 'NaN',
								],
								'fullsize' => [
									'title' => 'LLL:EXT:xo/Resources/Private/Language/locallang_tca.xlf:tx_xo_crop_variant.fullsize',
									'allowedAspectRatios' => [
										'NaN' => [
											'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
											'value' => 0.0
										],
									],
									'selectedRatio' => 'NaN',
								],
							]
						]
					]
				]
			],
			'maxitems' => 1
		],
		$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
	),
];