<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Publiczny',
        ModelAttribute::VISIBILITY_INTERNAL => 'Wewnętrzny',
        ModelAttribute::VISIBILITY_PRIVATE => 'Prywatny',
    ],
];
