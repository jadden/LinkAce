<?php

return [

    'log' => 'Vizsgálati napló',
    'system_events' => 'Rendszeres események',
    'settings_history' => 'Beállítások előzményei',
    'user_history' => 'Felhasználói előzmények',
    'user_history_entry' => 'Felhasználó :id: :change',

    'no_logs_found' => 'Nem található napló',

    'activity_entry_with_causer' => ':change by :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => 'Rendszer: Cron Token újra generálódott',
        ],
        'user_settings' => [
            'api_token_generated' => 'Felhasználó: API token generálódott',
            'api_token_revoken' => 'Felhasználó: API Token visszavonásra került',
        ],
    ],
];
