<?php
return [
    'import' => 'Importer',
    'import_queue' => 'Importer kø',
    'failed_imports' => 'Mislykkede importer',
    'scheduled_for' => 'Planlagt for',
    'start_import' => 'Start import',
    'import_running' => 'Import kjører...',
    'import_file' => 'Fil for import',

    'import_help' => 'Du kan importere dine eksisterende nettleserbokmerker her. Vanligvis eksporteres bokmerker til en .html-fil av nettleseren din. Velg filen her, og start importen. Vær oppmerksom på at en cron må være konfigurert for at importen skal fungere.',

    'import_networkerror' => 'Noe gikk galt under importeringen av bokmerkene. Vennligst se nettleserkonsollet for detailer eller se i applikasjonsloggene.',
    'import_error' => 'Noe gikk galt under importeringen av bokmerkene. Vennligst se applikasjonsloggene for yttereligere informasjon.',
    'import_empty' => 'Kan ikke importere bokmerker. Enten er den opplastede filen korrupt eller tom.',
    'import_successfully' => ':queued linker er lagt til kø for import og vil bli behandlet samtidig. :hoppet over lenker ble hoppet over fordi de allerede eksisterer i databasen. Alle importerte lenker vil bli tildelt taggen :taglink.',
];
