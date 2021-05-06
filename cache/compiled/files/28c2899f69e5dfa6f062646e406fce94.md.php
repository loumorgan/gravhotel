<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/pages/02.hotelpresentation/02.rooms/modular_alt.md',
    'modified' => 1620290702,
    'data' => [
        'header' => [
            'title' => 'rooms',
            'menu' => 'Room Tour',
            'body_classes' => 'modular header-lite fullwidth',
            'bg_color' => '#B4B093',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_portfolio',
                        1 => '_bottom'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: rooms
menu: Room Tour
body_classes: "modular header-lite fullwidth"
bg_color: "#B4B093"

content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _portfolio
            - _bottom',
        'markdown' => '# Rooms tour'
    ]
];
