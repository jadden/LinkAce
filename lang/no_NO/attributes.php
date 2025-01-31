<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Offentlig',
        ModelAttribute::VISIBILITY_INTERNAL => 'Intern',
        ModelAttribute::VISIBILITY_PRIVATE => 'Privat',
    ],
];
