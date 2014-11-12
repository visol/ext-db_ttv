<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';
//Rename backend columns to avoid naming annoyances in page-module with "oldStyleColumns"
$TCA['tt_content']['columns']['colPos']['config']['items']['0']['0'] = 'TV-SP-0';
$TCA['tt_content']['columns']['colPos']['config']['items']['0']['1'] = 0;
$TCA['tt_content']['columns']['colPos']['config']['items']['1']['0'] = 'TV-SP-1';
$TCA['tt_content']['columns']['colPos']['config']['items']['1']['1'] = 1;
$TCA['tt_content']['columns']['colPos']['config']['items']['2']['0'] = 'TV-SP-2';
$TCA['tt_content']['columns']['colPos']['config']['items']['2']['1'] = 2;
$TCA['tt_content']['columns']['colPos']['config']['items']['3']['0'] = 'TV-SP-3';
$TCA['tt_content']['columns']['colPos']['config']['items']['3']['1'] = 3;
//Additonal backend columns to avoid errors in page-module with "oldStyleColumns"
$TCA['tt_content']['columns']['colPos']['config']['items']['4']['0'] = 'TV-SP-4';
$TCA['tt_content']['columns']['colPos']['config']['items']['4']['1'] = 4;
$TCA['tt_content']['columns']['colPos']['config']['items']['5']['0'] = 'TV-SP-5';
$TCA['tt_content']['columns']['colPos']['config']['items']['5']['1'] = 5;
$TCA['tt_content']['columns']['colPos']['config']['items']['6']['0'] = 'TV-SP-6';
$TCA['tt_content']['columns']['colPos']['config']['items']['6']['1'] = 6;
$TCA['tt_content']['columns']['colPos']['config']['items']['7']['0'] = 'TV-SP-7';
$TCA['tt_content']['columns']['colPos']['config']['items']['7']['1'] = 7;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:db_ttv/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,"pi1/static/","Templates for TemplaVoila");
?>