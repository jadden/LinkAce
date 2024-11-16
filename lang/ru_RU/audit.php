<?php

return [

    'log' => 'Журнал аудита',
    'system_events' => 'Системные события',
    'settings_history' => 'История настроек',
    'user_history' => 'История пользователя',
    'user_history_entry' => 'Пользователь :id: :change',

    'no_logs_found' => 'Записей не найдено',

    'activity_entry_with_causer' => ':change от :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => 'Система: Токен Cron был сгенерирован повторно',
        ],
        'user_settings' => [
            'api_token_generated' => 'API токен сгенерирован',
            'api_token_revoken' => 'API-токен был отозван',
        ],
    ],
];
