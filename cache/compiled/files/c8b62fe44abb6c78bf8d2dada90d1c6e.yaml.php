<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/plugins/shortcode-owl-carousel/blueprints.yaml',
    'modified' => 1615550072,
    'data' => [
        'name' => 'Shortcode Owl Carousel',
        'slug' => 'shortcode-owl-carousel',
        'type' => 'plugin',
        'version' => '1.0.4',
        'description' => 'This plugin provides a shortcode for Owl Carousel slider',
        'icon' => 'columns',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-shortcode-owl-carousel',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'shortcode, owl carousel, slider',
        'bugs' => 'https://github.com/getgrav/grav-plugin-shortcode-owl-carousel/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'shortcode-core',
                'version' => '>=4.1.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Enabled',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use Built-in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
