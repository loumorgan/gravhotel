<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/pages/02.hotelpresentation/blog.md',
    'modified' => 1620132240,
    'data' => [
        'header' => [
            'title' => 'Hotel',
            'menu' => 'L\'établissement',
            'body_classes' => 'title-h1h2',
            'never_cache_twig' => true,
            'hero_image' => 'patrick-perkins-SfyI_4Vw5Fc-unsplash.jpg',
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
            ],
            'hero_classes' => 'text-light hero-tiny overlay-light-gradient'
        ],
        'frontmatter' => 'title: Hotel
menu: \'L\'\'établissement\'
body_classes: title-h1h2
never_cache_twig: true
hero_image: patrick-perkins-SfyI_4Vw5Fc-unsplash.jpg
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
hero_classes: \'text-light hero-tiny overlay-light-gradient\'',
        'markdown' => '# Grav Hôtel,
## une visite virtuelle
![patrick-perkins-SfyI_4Vw5Fc-unsplash](patrick-perkins-SfyI_4Vw5Fc-unsplash.jpg "patrick-perkins-SfyI_4Vw5Fc-unsplash")


'
    ]
];
