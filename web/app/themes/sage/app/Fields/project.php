<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$project = new FieldsBuilder('project');

$project->setLocation('post_type', '==', 'project');

$project
    ->addTab('General')
        ->addImage('main_image')
        ->addText('title')
        ->addUrl('url', ['label' => 'URL du site', 'instructions' => '', 'required' => 0, 'default_value' => '', 'placeholder' => '',])
        ->addDatePicker('date', [
            'label' => 'Date du projet',
            'instructions' => '',
            'required' => 0,
            'display_format' => 'd/m/Y',
            'return_format' => 'd/m/Y',
            'first_day' => 1,
        ])
        ->addWysiwyg('content')
    ->addTab('Objectifs')
        ->addText('objectives_content_1', ['label' => 'Objectives Content 1'])
        ->addText('objectives_content_2', ['label' => 'Objectives Content 2'])
        ->addText('objectives_content_3', ['label' => 'Objectives Content 3'])
        ->addText('objectives_content_4', ['label' => 'Objectives Content 4'])
    ->addTab('Images')
        ->addImage('image_1', ['label' => 'Images',])
        ->addImage('image_2', ['label' => 'Images',])
        ->addImage('image_3', ['label' => 'Images',])
        ->addImage('image_4', ['label' => 'Images',])
        ->addImage('image_5', ['label' => 'Images',])
    ->addTab('Langages utilisés')
        ->addFile('languages_file_1', ['label' => 'Langage utilisé 1', 'required' => 0, 'return_format' => 'array', 'library' => 'all',])
        ->addFile('languages_file_2', ['label' => 'Langage utilisé 1', 'required' => 0, 'return_format' => 'array', 'library' => 'all',])
        ->addFile('languages_file_3', ['label' => 'Langage utilisé 1', 'required' => 0, 'return_format' => 'array', 'library' => 'all',])
        ->addFile('languages_file_4', ['label' => 'Langage utilisé 1', 'required' => 0, 'return_format' => 'array', 'library' => 'all',])
        ->addFile('languages_file_5', ['label' => 'Langage utilisé 1', 'required' => 0, 'return_format' => 'array', 'library' => 'all',])
        ->addFile('languages_file_6', ['label' => 'Langage utilisé 1', 'required' => 0, 'return_format' => 'array', 'library' => 'all',])

;

return $project;


