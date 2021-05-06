<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/pages/01.home/modular.md',
    'modified' => 1620309314,
    'data' => [
        'header' => [
            'title' => 'Home',
            'menu' => 'Home',
            'onpage_menu' => false,
            'body_classes' => 'modular header-image fullwidth',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_showcase',
                        1 => '_highlights',
                        2 => '_callout',
                        3 => '_bottom'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Home
menu: Home
onpage_menu: false
body_classes: "modular header-image fullwidth"

content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _showcase
            - _highlights
            - _callout
            - _bottom',
        'markdown' => ''
    ]
];
