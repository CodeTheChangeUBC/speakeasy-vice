<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/pchauhan/Desktop/VICE 2.0/grav-admin/user/themes/ams-wellness/blueprints.yaml',
    'modified' => 1517623390,
    'data' => [
        'name' => 'AMS Wellness',
        'version' => '1.0.0',
        'description' => 'Custom theme created by Code the Change',
        'author' => [
            'name' => 'Code the Change',
            'email' => 'info@codethechangeubc.org',
            'url' => 'https://codethechangeubc.org/'
        ],
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
