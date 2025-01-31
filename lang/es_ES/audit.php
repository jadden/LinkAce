<?php

return [

    'log' => 'Registro Auditoria',
    'system_events' => 'Eventos del sistema',
    'settings_history' => 'Historial de Ajustes',
    'user_history' => 'Historial de usuario',
    'user_history_entry' => 'Usuario :id: :change',

    'no_logs_found' => 'No se encontraron registros',

    'activity_entry_with_causer' => ':change por :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => 'Sistema: El token Cron fue regenerado',
        ],
        'user_settings' => [
            'api_token_generated' => 'Usuario: Se generó el token API',
            'api_token_revoken' => 'Usuario: Token API fue revocado',
        ],
    ],
];
