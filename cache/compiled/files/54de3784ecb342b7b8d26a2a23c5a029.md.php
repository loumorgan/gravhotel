<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/pages/02.hotelpresentation/default.md',
    'modified' => 1620288674,
    'data' => [
        'header' => [
            'title' => 'hotel presentation',
            'menu' => 'Presentation',
            'body_classes' => 'title-h1h2',
            'never_cache_twig' => true,
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: hotel presentation
menu: Presentation
body_classes: title-h1h2
never_cache_twig: true
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => '# Grav Hotel,
## experiment excellence...


'
    ]
];
