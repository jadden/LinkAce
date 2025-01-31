<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Nyilvános',
        ModelAttribute::VISIBILITY_INTERNAL => 'Belső',
        ModelAttribute::VISIBILITY_PRIVATE => 'Privát',
    ],
];
