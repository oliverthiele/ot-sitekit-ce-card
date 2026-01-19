<?php

$EM_CONF['ot_cesitekitcecard'] = [
    'title' => 'CE Card',
    'description' => 'TYPO3 content element that displays a card element. Integrates with the Sitekit and ot-irrebuttons extensions.',
    'category' => 'frontend',
    'state' => 'stable',
    'author' => 'Oliver Thiele',
    'author_email' => 'mail@oliver-thiele.de',
    'author_company' => 'Web Development Oliver Thiele',
    'version' => '1.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'ot_sitekit_base' => '*',
            'ot_irrebuttons' => '3.2.0-3.2.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
