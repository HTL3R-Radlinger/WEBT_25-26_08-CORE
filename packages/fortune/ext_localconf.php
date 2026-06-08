<?php

defined('TYPO3_MODE') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Register plugin with Extbase
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Fortune', // Extension key
    'fortune', // Plugin name (must be unique within the extension)
    [
        \Htl3r\Fortune\Controller\MessageController::class => 'show' // Non-cacheable actions
    ],
    [
        // Cacheable actions go here if needed
    ]
);

// Register TypoScript configuration for the plugin
//ExtensionManagementUtility::addTypoScriptSetup(trim('
//plugin.tx_fortune {
//    view {
//        templateRootPaths.0 = EXT:fortune/Resources/Private/Templates/
//        partialRootPaths.0 = EXT:fortune/Resources/Private/Partials/
//        layoutRootPaths.0 = EXT:fortune/Resources/Private/Layouts/
//    }
//}
//'));