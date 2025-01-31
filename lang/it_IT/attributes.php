<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Pubblico',
        ModelAttribute::VISIBILITY_INTERNAL => 'Interna',
        ModelAttribute::VISIBILITY_PRIVATE => 'Privato',
    ],
];
