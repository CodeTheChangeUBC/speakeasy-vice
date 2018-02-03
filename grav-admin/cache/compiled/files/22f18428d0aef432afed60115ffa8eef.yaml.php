<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/pchauhan/Desktop/VICE 2.0/grav-admin/user/config/site.yaml',
    'modified' => 1517628818,
    'data' => [
        'title' => 'AMS Wellness',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Code the Change UBC',
            'email' => 'info@codethechangeubc.org'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'AMS Wellness featuring VICE & Speakeasy'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
