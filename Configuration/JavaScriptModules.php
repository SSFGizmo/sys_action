<?php

return [
    'dependencies' => ['recordlist', 'backend'],
    'imports' => [
        '@typo3/backend/' => 'EXT:backend/Resources/Public/JavaScript/',
        '@typo3/redirects/' => 'EXT:redirects/Resources/Public/JavaScript/',
        '@friendsoftypo3/taskcenter/' => 'EXT:sys_action/Resources/Public/JavaScript/',
    ],
];
