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

    'register' => 'Registreren',
    'register_welcome' => 'Welkom bij LinkAce! Je bent uitgenodigd om deel te nemen aan deze sociale-bladwijzers-tool. Kies alsjeblieft een gebruikersnaam en een wachtwoord. Na succesvolle registratie zul je worden doorgestuurd naar het dashboard.',

    'failed' => 'Deze gegevens komen niet overeen met onze administratie.',
    'throttle' => 'Teveel inlogpogingen. Probeer het over :seconds seconden opnieuw.',
    'unauthorized' => 'Inloggen niet geautoriseerd. Neem contact op met uw beheerder.',

    'confirm_title' => 'Bevestiging vereist',
    'confirm' => 'Bevestig deze actie met je huidige wachtwoord.',
    'confirm_action' => 'Bevestig actie',

    'two_factor' => 'Tweestapsverificatie',
    'two_factor_check' => 'Voer nu het éénmalige wachtwoord in dat door de tweestapsverificatie-app wordt verstrekt.',
    'two_factor_with_recovery' => 'Verifieer met herstelcode',

    'api_tokens' => 'API-tokens',
    'api_tokens.no_tokens_found' => 'Geen API-tokens gevonden.',
    'api_tokens.generate' => 'Genereer een nieuwe API-token',
    'api_tokens.generate_short' => 'Token genereren',
    'api_tokens.generate_help' => 'API-tokens worden gebruikt om jezelf te verifiëren bij het gebruik van de LinkAce-API.',
    'api_tokens.generated_successfully' => 'De API-token is met succes gegenereerd: <code>:token</code>',
    'api_tokens.generated_help' => 'Bewaar dit token op een veilige plaats. Het is <strong>niet</strong> mogelijk om je token te herstellen als je het verliest.',
    'api_tokens.name' => 'Tokennaam',
    'api_tokens.name_help' => 'Kies een naam voor je token. De naam mag alleen alfanumerieke tekens, streepjes en liggende streepjes bevatten. Nuttig voor als je aparte tokens wilt maken voor verschillende toepassingen.',

    'api_token_system' => 'Systeem-API-token',
    'api_tokens_system' => 'Systeem-API-tokens',
    'api_tokens.generate_help_system' => 'API-tokens worden gebruikt voor toegang tot de LinkAce-API vanuit andere applicaties of scripts. Standaard is alleen openbare of interne data toegankelijk, maar tokens kunnen extra toegang krijgen tot privégegevens indien nodig.',
    'api_tokens.private_access' => 'Token heeft toegang tot privégegevens',
    'api_tokens.private_access_help' => 'De token kan toegang krijgen tot privélinks, lijsten, tags en notities van een gebruiker gebaseerd op de opgegeven machtigingen.',
    'api_tokens.abilities' => 'Tokenmachtigingen',
    'api_tokens.abilities_select' => 'Selecteer tokenmachtigingen...',
    'api_tokens.abilities_help' => 'Selecteer alle machtigingen die een token kan hebben. Machtigingen kunnen later niet worden gewijzigd.',
    'api_tokens.ability_private_access' => 'Token heeft toegang tot privégegevens',

    'api_tokens.revoke' => 'Token intrekken',
    'api_tokens.revoke_confirm' => 'Weet je zeker dat je deze token wilt intrekken? Deze stap kan niet ongedaan worden gemaakt en het token kan niet hersteld worden.',
    'api_tokens.revoke_successful' => 'De token is met succes ingetrokken.',

    'sso' => 'SSO',
    'sso_account_provider' => 'SSO Provider',
    'sso_account_id' => 'SSO ID',
    'sso_provider_disabled' => 'De geselecteerde SSO-provider is niet beschikbaar. Kies een andere.',
    'sso_wrong_provider' => 'Kan niet inloggen met :currentProvider. Gebruik :userProvider om in te loggen of neem contact op met uw beheerder voor hulp.',

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
