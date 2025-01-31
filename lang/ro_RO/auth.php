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

    'register' => 'Înregistrare',
    'register_welcome' => 'Bine ați venit la LinkAce! Ați fost invitat să vă alăturați acestui instrument de marcare socială. Vă rugăm să selectați un nume de utilizator și o parolă. După înregistrarea cu succes, veți fi redirecționat către tabloul de bord.',

    'failed' => 'Aceste date de autentificare nu se potrivesc cu înregistrările noastre.',
    'throttle' => 'Prea multe tentative de autentificare. Reîncearcă din nou în :seconds secunde.',
    'unauthorized' => 'Conectare neautorizată. Contactează-ți administratorul.',

    'confirm_title' => 'Confirmarea este necesară',
    'confirm' => 'Confirmă această acțiune prin folosirea parolei actuale.',
    'confirm_action' => 'Confirmă acțiunea',

    'two_factor' => 'Autentificare în doi factori',
    'two_factor_check' => 'Introdu acum parola de unică folosință furnizată de aplicația de autentificare în doi factori.',
    'two_factor_with_recovery' => 'Autentifică-te cu codul de recuperare',

    'api_tokens' => 'Token-uri API',
    'api_tokens.no_tokens_found' => 'Nu s-au găsit jetoane API.',
    'api_tokens.generate' => 'Generarea unui nou Token API',
    'api_tokens.generate_short' => 'Generarea tokenului',
    'api_tokens.generate_help' => 'Jetoanele API sunt utilizate pentru a vă autentifica atunci când utilizați API LinkAce.',
    'api_tokens.generated_successfully' => 'Jetonul API a fost generat cu succes: <code>:token</code>',
    'api_tokens.generated_help' => 'Vă rugăm să păstrați acest jeton într-un loc sigur. <strong>Nu</strong> este posibil să vă recuperați jetonul dacă îl pierdeți.',
    'api_tokens.name' => 'Numele jetonului',
    'api_tokens.name_help' => 'Alegeți un nume pentru jetonul dvs. Numele poate conține numai caractere alfa-numerice, liniuțe și liniuțe de subliniere. Util dacă doriți să creați token-uri separate pentru diferite cazuri de utilizare sau aplicații.',

    'api_token_system' => 'Token API de sistem',
    'api_tokens_system' => 'Token-uri API de sistem',
    'api_tokens.generate_help_system' => 'Jetoanele API sunt utilizate pentru a accesa API LinkAce din alte aplicații sau scripturi. În mod implicit, numai datele publice sau interne sunt accesibile, dar token-urile pot primi acces suplimentar la date private, dacă este necesar.',
    'api_tokens.private_access' => 'Tokenul poate accesa date private',
    'api_tokens.private_access_help' => 'Tokenul poate accesa și modifica linkurile private, listele, etichetele și notele oricărui utilizator pe baza abilităților specificate.',
    'api_tokens.abilities' => 'Token abilități',
    'api_tokens.abilities_select' => 'Selectați abilitățile simbolice...',
    'api_tokens.abilities_help' => 'Selectați toate abilitățile pe care le poate avea un jeton. Abilitățile nu pot fi modificate ulterior.',
    'api_tokens.ability_private_access' => 'Tokenul poate accesa date private',

    'api_tokens.revoke' => 'Revocați jetonul',
    'api_tokens.revoke_confirm' => 'Chiar doriți să revocați acest jeton? Acest pas nu poate fi anulat, iar jetonul nu poate fi recuperat.',
    'api_tokens.revoke_successful' => 'Jetonul a fost revocat cu succes.',

    'sso' => 'SSO',
    'sso_account_provider' => 'Furnizor SSO',
    'sso_account_id' => 'Cod de identificare SSO',
    'sso_provider_disabled' => 'Furnizorul SSO selectat nu este disponibil. Alege altul.',
    'sso_wrong_provider' => 'Nu se poate efectua conectarea cu :currentProvider. Folosește :userProvider în vederea conectării sau contactează-ți administratorul pentru ajutor.',

    'sso_provider' => [
        'auth0' => 'Autor0',
        'authentik' => 'Autentik',
        'azure' => 'Azure',
        'cognito' => 'Cognito',
        'fusionauth' => 'FusionAuth',
        'google' => 'Google',
        'github' => 'Github',
        'gitlab' => 'GitLab',
        'keycloak' => 'Keycloak',
        'oidc' => 'OIDC',
        'okta' => 'Okta',
        'zitadel' => 'Zitadel',
    ],
];
