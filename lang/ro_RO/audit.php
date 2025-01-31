<?php

return [

    'log' => 'Jurnal de audit',
    'system_events' => 'Evenimente de sistem',
    'settings_history' => 'Istoric setări',
    'user_history' => 'Istoricul utilizatorului',
    'user_history_entry' => 'Utilizator :id: :change',

    'no_logs_found' => 'Nu s-au găsit jurnale',

    'activity_entry_with_causer' => ':change de :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => 'Sistem: Cron Token a fost re-generat',
        ],
        'user_settings' => [
            'api_token_generated' => 'Utilizator: Token API a fost generat',
            'api_token_revoken' => 'Utilizator: Token-ul API a fost revocat',
        ],
    ],
];
