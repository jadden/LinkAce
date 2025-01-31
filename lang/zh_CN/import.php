<?php
return [
    'import' => '导入',
    'import_queue' => '导入队列',
    'failed_imports' => '失败的进口',
    'scheduled_for' => '计划于',
    'start_import' => '开始导入',
    'import_running' => '正在运行导入...',
    'import_file' => '从文件中导入',

    'import_help' => '您可以在此导入现有的浏览器书签。通常，浏览器会将书签导出为 .html 文件。在此选择文件并开始导入。请注意，必须配置 cron 才能进行导入。',

    'import_networkerror' => '试图导入书签时出错。请检查您的浏览器控制台的详细信息或查看应用程序日志。',
    'import_error' => '试图导入书签时出错。请查询应用程序日志。',
    'import_empty' => '无法导入任何书签。上传的文件可能已损坏或为空。',
    'import_successfully' => ':queued links 是排队等待导入的链接，将被连续处理。 :skipped links 被跳过是因为它们已经存在于数据库中。所有导入的链接都将被赋予 :taglink 标签。',
];
