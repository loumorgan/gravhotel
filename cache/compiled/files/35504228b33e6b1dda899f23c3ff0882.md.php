<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/pages/03.contact/modular_alt.md',
    'modified' => 1620287719,
    'data' => [
        'header' => [
            'title' => 'Contact Us',
            'onpage_menu' => false,
            'body_classes' => 'modular header-lite fullwidth',
            'bg_color' => '#B4B093',
            'form' => [
                'name' => 'my-nice-form',
                'action' => '/contact',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'id' => 'name',
                        'label' => 'Name',
                        'classes' => 'form-control form-control-lg',
                        'placeholder' => 'Enter your name',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'id' => 'email',
                        'classes' => 'form-control form-control-lg',
                        'label' => 'Email',
                        'placeholder' => 'Enter your email address',
                        'type' => 'email',
                        'validate' => [
                            'rule' => 'email',
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'message',
                        'label' => 'Message',
                        'classes' => 'form-control form-control-lg',
                        'size' => 'long',
                        'placeholder' => 'Enter your message',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit',
                        'classes' => 'btn btn-primary btn-block'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.from }}',
                                1 => '{{ form.value.email }}'
                            ],
                            'subject' => '[Feedback] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'feedback-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    2 => [
                        'message' => 'Thank you for your feedback!'
                    ],
                    3 => [
                        'display' => 'thankyou'
                    ]
                ]
            ],
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: Contact Us
onpage_menu: false
body_classes: "modular header-lite fullwidth"
bg_color: "#B4B093"
form:
    name: my-nice-form
    action: /contact
    fields:
        - name: name
          id: name
          label: Name
          classes: form-control form-control-lg
          placeholder: Enter your name
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          id: email
          classes: form-control form-control-lg
          label: Email
          placeholder: Enter your email address
          type: email
          validate:
            rule: email
            required: true

        - name: message
          label: Message
          classes: form-control form-control-lg
          size: long
          placeholder: Enter your message
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
          classes: btn btn-primary btn-block

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include \'forms/data.html.twig\' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include \'forms/data.txt.twig\' %}"
        - message: Thank you for your feedback!
        - display: thankyou    
content:
    items: @self.modular
    order:
        by: default
        dir: asc',
        'markdown' => ''
    ]
];
