<?php

defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'be_users',
    [
        'createdByAction' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ]
);
