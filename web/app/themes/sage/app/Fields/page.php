<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page');

$page
    ->addGroup('Section contact')
    ->addTrueFalse('hide_section', [
        'label' => 'Ajouter la section de contact',
    ])
    ->addWysiwyg('contact_text', ['label' => 'Texte de contact']);


return $page;
