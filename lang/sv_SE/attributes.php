<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Allmänheten',
        ModelAttribute::VISIBILITY_INTERNAL => 'Internt',
        ModelAttribute::VISIBILITY_PRIVATE => 'Privat',
    ],
];
