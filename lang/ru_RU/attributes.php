<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => 'Публичный',
        ModelAttribute::VISIBILITY_INTERNAL => 'Внутренний',
        ModelAttribute::VISIBILITY_PRIVATE => 'Приватный',
    ],
];
