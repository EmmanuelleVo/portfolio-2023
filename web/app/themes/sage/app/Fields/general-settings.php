<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$generalSettings = new FieldsBuilder('general-settings');

$generalSettings
    ->addText('email', ['label' => 'Email'])
    ->addText('phone_number', ['label' => 'Phone Number']);

return $generalSettings;
