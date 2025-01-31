<?php

return [

    'log' => '审核日志',
    'system_events' => '系统事件',
    'settings_history' => '设置历史记录',
    'user_history' => '用户历史',
    'user_history_entry' => '用户 :id: :change',

    'no_logs_found' => '未找到日志',

    'activity_entry_with_causer' => ':change by :causer',

    'logs' => [
        'system' => [
            'cron_token_regenerated' => '系统：重新生成了 Cron Token',
        ],
        'user_settings' => [
            'api_token_generated' => '用户：已生成应用程序接口令牌',
            'api_token_revoken' => '用户：API 令牌已撤销',
        ],
    ],
];
