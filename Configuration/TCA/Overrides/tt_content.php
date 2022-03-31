<?php

// ---------------------------------------------------------------------------------------------------------------------
// Icon Text Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ce_kist_values/Resources/Private/Language/locallang_tca.xlf:tx_ce_kist_values.title',
		'ce_kist_values',
		'ps14-content-kist-values'
	),
	'CType',
	'ce_kist_values'
);

$GLOBALS['TCA']['tt_content']['types']['ce_kist_values'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, tx_xo_elements,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ce_kist_values']['columnsOverrides']['tx_xo_elements']['config']['overrideChildTca'] = [
	'columns' => [
		'record_type' => [
			'config' => [
				'items' => [
					['LLL:EXT:ce_history/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.default', 'ce_kist_values_default'],
				],
				'default' => 'ce_kist_values_default'
			]
		],
		'media' => [
			'config' => [
				'maxitems' => 3
			]
		]
	],
	'types' => [
		'ce_kist_values_default' => [
			'showitem' => '
				l10n_diffsource, record_type, --palette--;;header, description, media, tx_ce_kist_values_color_scheme,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
				--palette--;;visibility,
				--palette--;;access',
		],
	]
];