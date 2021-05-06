<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/pages/03.contact/default.md',
    'modified' => 1620123728,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'menu' => 'Nous contacter',
            'body_classes' => 'title-h1h2',
            'never_cache_twig' => true,
            'process' => [
                'markdown' => false
            ]
        ],
        'frontmatter' => 'title: Contact
menu: Nous contacter
body_classes: title-h1h2
never_cache_twig: true
process:
    markdown: false',
        'markdown' => '<h1>Une question ? Une envie ?</h1>
<h2>contactez-nous !</h2>
<div class="contactForm">
<form>
<input type="textarea" value="pouet pouet"></input>
</form>
</div>'
    ]
];
