<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page');

$page
    ->addTab('Section contact')
    ->addTrueFalse('hide_section', [
        'label' => 'Ajouter la section de contact',
    ])
    ->addWysiwyg('contact_text', ['label' => 'Texte de contact']);

$page
    ->addTab('Page à propos')
        ->addTrueFalse('is_about_page', [
            'label' => 'Is this an "About" page?',
        ])
        ->addImage('image', ['label' => 'Image'])
        ->addText('name', ['label' => 'Nom'])
        ->addText('role_1', ['label' => 'Rôle 1'])
        ->addText('role_2', ['label' => 'Rôle 2'])
        ->addWysiwyg('about_content', ['label' => 'Contenu'])
        ->addText('competence_1', ['label' => 'Compétence 1'])
        ->addText('competence_2', ['label' => 'Compétence 2'])
        ->addText('competence_3', ['label' => 'Compétence 3'])
;

return $page;
