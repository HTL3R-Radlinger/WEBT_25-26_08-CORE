<?php

defined('TYPO3') or die();

use Htl3r\Fortune\Controller\FortuneController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'Fortune',
    'Motd',
    [FortuneController::class => 'show'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
