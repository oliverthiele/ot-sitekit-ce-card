<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$key = 'ot_sitekitcecard';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:' . $key . '/Resources/Private/Language/locallang_db.xlf:tt_content.CType.label',
        'description' => 'LLL:EXT:' . $key . '/Resources/Private/Language/locallang_db.xlf:tt_content.CType.description',
        'value' => $key,
        'icon' => 'ot-sitekit-ce-card',
        'group' => 'extras',
    ],
);

$GLOBALS['TCA']['tt_content']['types'][$key] = [
    'showitem' => '
        --palette--;;headers,bodytext,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:media,assets',
];

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--palette--;;irreButtons,tx_otirrebuttons_domain_model_buttons,',
    $key,
    'after:bodytext',
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--palette--;;ot-crop-variants,',
    $key,
    'before:assets',
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$key] = 'ot-sitekit-ce-card';

$GLOBALS['TCA']['tt_content']['types'][$key]['columnsOverrides'] = [
    'bodytext' => [
        'config' => [
            'enableRichtext' => true,
        ],
    ],
    'assets' => [
        'config' => [
            'allowed' => 'jpg,jpeg,png,gif,svg',
        ],
    ],
];
