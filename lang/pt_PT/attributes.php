<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Público',
        ModelAttribute::VISIBILITY_INTERNAL => 'Interno',
        ModelAttribute::VISIBILITY_PRIVATE => 'Privado',
    ],
];
