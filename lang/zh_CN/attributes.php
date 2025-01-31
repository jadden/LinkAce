<?php

use App\Enums\ModelAttribute;

return [
    'visibility' => [
        ModelAttribute::VISIBILITY_PUBLIC => '公众',
        ModelAttribute::VISIBILITY_INTERNAL => '内部',
        ModelAttribute::VISIBILITY_PRIVATE => '仅自己可见',
    ],
];
