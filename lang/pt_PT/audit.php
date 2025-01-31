<?php

return [

    'log' => 'Registo de auditoria',
    'system_events' => 'Eventos do sistema',
    'settings_history' => 'Histórico das definições',
    'user_history' => 'Histórico do utilizador',
    'user_history_entry' => 'Utilizador :id: :change',

    'no_logs_found' => 'Não foram encontrados registos',

    'activity_entry_with_causer' => ':change by :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => 'Sistema: O Cron Token foi gerado novamente',
        ],
        'user_settings' => [
            'api_token_generated' => 'Utilizador: Foi gerado um Token API',
            'api_token_revoken' => 'Utilizador: o token da API foi revogado',
        ],
    ],
];
