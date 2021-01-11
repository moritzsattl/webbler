<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'htl3_sitepackage_sat';

    /**
     * Default TypoScript for Htl3SitepackageSat
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'HTL 3 sitepackage sat'
    );
});
