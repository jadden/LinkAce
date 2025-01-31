<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'register' => 'Registrer',
    'register_welcome' => 'Velkommen til LinkAce! Du er invitert til å bli med i dette sosiale bokmerke-verktøyet. Velg et brukernavn og passord. Etter at registreringen er vellykket, blir du videresendt til dashbordet.',

    'failed' => 'Disse opplysningene samsvarer ikke med våre oppføringer.',
    'throttle' => 'For mange innloggingsforsøk. Prøv igjen om :seconds sekunder.',
    'unauthorized' => 'Innlogging uautorisert. Vennligst kontakt systemansvarlig.',

    'confirm_title' => 'Bekreftelse kreves',
    'confirm' => 'Vennligst bekreft denne handlingen med ditt nåværende passord.',
    'confirm_action' => 'Bekreft handlingen',

    'two_factor' => 'To-faktor autentisering',
    'two_factor_check' => 'Vennligst skriv inn engangspassordet som vises i to-faktor autentiseringsappen nå.',
    'two_factor_with_recovery' => 'Autentiser med gjenopprettingskode',

    'api_tokens' => 'API Tokens',
    'api_tokens.no_tokens_found' => 'Ingen API-tokens funnet.',
    'api_tokens.generate' => 'Lag en ny API Token',
    'api_tokens.generate_short' => 'Opprett kode',
    'api_tokens.generate_help' => 'API-tokens brukes til å godkjenne deg selv ved bruk av LinkAce API.',
    'api_tokens.generated_successfully' => 'API-tokenet ble generert riktig: <code>:token</code>',
    'api_tokens.generated_help' => 'Oppbevar dette tokenet på et trygt sted. Det er <strong>ikke</strong> mulig å gjenopprette tokenet ditt hvis du mister det.',
    'api_tokens.name' => 'Sjetongens navn',
    'api_tokens.name_help' => 'Velg et navn på din token. Navnet kan bare inneholde alfanumeriske tegn, bindestreker og understreker. Nyttig hvis du vil lage egne tokens for forskjellige brukssaker eller programmer.',

    'api_token_system' => 'System API-token',
    'api_tokens_system' => 'System API-tokens',
    'api_tokens.generate_help_system' => 'API-tokens brukes til å få tilgang til LinkAce API fra andre applikasjoner eller skript. Som standard er det bare tilgjengelige offentlige eller interne data, men tokens kan gis ytterligere tilgang til private data hvis nødvendig.',
    'api_tokens.private_access' => 'Token har tilgang til private data',
    'api_tokens.private_access_help' => 'Tokenet kan få tilgang til og endre private lenker, lister, tagger og notater til hvem som helst basert på de angitte evnene.',
    'api_tokens.abilities' => 'Token evner',
    'api_tokens.abilities_select' => 'Velg token evner...',
    'api_tokens.abilities_help' => 'Velg alle evner et token kan ha. Egenskaper kan ikke endres senere.',
    'api_tokens.ability_private_access' => 'Token har tilgang til private data',

    'api_tokens.revoke' => 'Annuler token',
    'api_tokens.revoke_confirm' => 'Vil du virkelig tilbakekalle denne token? Dette trinnet kan ikke angres og tokenet kan ikke gjenopprettes.',
    'api_tokens.revoke_successful' => 'Tokenet ble opphevet.',

    'sso' => 'SSO',
    'sso_account_provider' => 'SSO leverandør',
    'sso_account_id' => 'SSO ID',
    'sso_provider_disabled' => 'Den valgte SSO-leverandøren er ikke tilgjengelig. Velg en annen.',
    'sso_wrong_provider' => 'Kan ikke logge inn med :currentProvider. Bruk :userProvider for å logge inn eller kontakte systemansvarlig for hjelp.',

    'sso_provider' => [
        'auth0' => 'Auth0',
        'authentik' => 'Authentik',
        'azure' => 'Azure',
        'cognito' => 'Cognito',
        'fusionauth' => 'FusionAuth',
        'google' => 'Google',
        'github' => 'GitHub',
        'gitlab' => 'GitLab',
        'keycloak' => 'Keycloak',
        'oidc' => 'OIDC',
        'okta' => 'Okta',
        'zitadel' => 'Zitadel',
    ],
];
