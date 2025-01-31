<?php

return [

    'log' => 'Registro di Controllo',
    'system_events' => 'Eventi Di Sistema',
    'settings_history' => 'Cronologia Impostazioni',
    'user_history' => 'Cronologia Utente',
    'user_history_entry' => 'Utente :id: :Change',

    'no_logs_found' => 'Nessun registro trovato',

    'activity_entry_with_causer' => ':change da :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => 'Sistema: Cron Token è stato ri-generato',
        ],
        'user_settings' => [
            'api_token_generated' => 'Utente: API Token è stato generato',
            'api_token_revoken' => 'Utente: API Token è stato revocato',
        ],
    ],
];
