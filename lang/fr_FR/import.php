<?php
return [
    'import' => 'Importer',
    'import_queue' => 'Importer la file d\'attente',
    'failed_imports' => 'Importation échouée',
    'scheduled_for' => 'Planifié pour',
    'start_import' => 'Démarrer l\'importation',
    'import_running' => 'Import en cours ...',
    'import_file' => 'Fichier à importer',

    'import_help' => 'Vous pouvez importer les signets existants de votre navigateur ici. Habituellement, les signets sont exportés dans un fichier .html par votre navigateur. Sélectionnez le fichier ici et démarrez l\'importation. Veuillez noter qu\'un cron doit être configuré pour que l\'import fonctionne.',

    'import_networkerror' => 'Une erreur s\'est produite lors de l\'importation des signets. Veuillez vérifier la console de votre navigateur pour plus de détails ou consulter les journaux de l\'application.',
    'import_error' => 'Une erreur s\'est produite lors de l\'importation des signets. Veuillez consulter les journaux de l\'application.',
    'import_empty' => 'Impossible d\'importer des signets. Soit le fichier téléversé est corrompu soit il est vide.',
    'import_successfully' => 'Les liens :queued sont mis en file d\'attente pour l\'importation et seront traités par la suite. Les liens :skipped ont été ignorés car ils existent déjà dans la base de données. Tous les liens importés seront assignés au tag :taglink.',
];
