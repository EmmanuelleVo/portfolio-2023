<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('post');

$post
    ->setLocation('post_type', '==', 'post');

$post
    ->addImage('main_image')
    ->addText('title')
    ->addDatePicker('date', [
        'label' => 'Date du projet',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'display_format' => 'd/m/Y',
        'return_format' => 'd/m/Y',
        'first_day' => 1,
    ])
    ->addWysiwyg('content')
    ->addUrl('url', ['label' => 'URL du site', 'instructions' => '', 'required' => 0, 'default_value' => '', 'placeholder' => '',])
    ->addRepeater('objectives', ['label' => 'Objectifs', 'min' => 1, 'layout' => 'block', 'button_label' => 'Ajouter'])
        ->addText('objectives_content')
    ->endRepeater()



    /*->addRepeater('languages', ['min' => 1, 'layout' => 'block'])
        ->addFile('languages_file', [
            'label' => 'Langage utilisé',
            'required' => 0,
            'return_format' => 'array',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ])
    ->endRepeater()
    ->addRepeater('images', ['min' => 1, 'layout' => 'block'])
        ->addImage('image', [
            'label' => 'Images',
            'required' => 0,
            'return_format' => 'array',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ])
    ->endRepeater()
    ->addRepeater('gallery', ['min' => 1, 'layout' => 'block'])
        ->addGallery('gallery_field', [
            'label' => 'Gallery Field',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => [],
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'return_format' => 'array',
            'min' => '',
            'max' => '',
            'insert' => 'append',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ])
    ->endRepeater()*/
;

return $post;
