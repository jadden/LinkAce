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

    'register' => 'Registrera',
    'register_welcome' => 'Välkommen till LinkAce! Du har blivit inbjuden att gå med i detta sociala bokmärkesverktyg. Vänligen välj ett användarnamn och ett lösenord. När du har registrerat dig kommer du att omdirigeras till instrumentpanelen.',

    'failed' => 'Dessa uppgifter stämmer inte överens med vårt register.',
    'throttle' => 'För många inloggningsförsök. Var vänlig försök igen om :seconds sekunder.',
    'unauthorized' => 'Inloggning obehörig. Vänligen kontakta din administratör.',

    'confirm_title' => 'Bekräftelse krävs',
    'confirm' => 'Vänligen bekräfta denna åtgärd med ditt nuvarande lösenord.',
    'confirm_action' => 'Bekräfta åtgärd',

    'two_factor' => 'Tvåfaktorsautentisering',
    'two_factor_check' => 'Ange engångslösenordet som tillhandahålls av din tvåfaktorsautentiseringsapp nu.',
    'two_factor_with_recovery' => 'Autentisera med återställningskod',

    'api_tokens' => 'API-token',
    'api_tokens.no_tokens_found' => 'Inga API-tokens hittades.',
    'api_tokens.generate' => 'Generera ett nytt API-token',
    'api_tokens.generate_short' => 'Generera Token',
    'api_tokens.generate_help' => 'API-tokens används för att autentisera dig när du använder LinkAce API.',
    'api_tokens.generated_successfully' => 'API-token genererades framgångsrikt: <code>:token</code>',
    'api_tokens.generated_help' => 'Vänligen förvara denna token på ett säkert ställe. Det är <strong>inte</strong> möjligt att återfå din token om du tappar bort den.',
    'api_tokens.name' => 'Tokenens namn',
    'api_tokens.name_help' => 'Välj ett namn för din token. Namnet får endast innehålla alfanumeriska tecken, bindestreck och understreck. Användbart om du vill skapa separata tokens för olika användningsfall eller applikationer.',

    'api_token_system' => 'Token för system-API',
    'api_tokens_system' => 'Tokens för system-API',
    'api_tokens.generate_help_system' => 'API-tokens används för att komma åt LinkAce API från andra applikationer eller skript. Som standard är endast offentliga eller interna data tillgängliga, men tokens kan beviljas ytterligare åtkomst till privata data om det behövs.',
    'api_tokens.private_access' => 'Token ger tillgång till privata data',
    'api_tokens.private_access_help' => 'Token kan komma åt och ändra privata länkar, listor, taggar och anteckningar för alla användare baserat på de angivna förmågorna.',
    'api_tokens.abilities' => 'Token-förmågor',
    'api_tokens.abilities_select' => 'Välj tokenförmågor...',
    'api_tokens.abilities_help' => 'Välj alla förmågor som en token kan ha. Förmågorna kan inte ändras senare.',
    'api_tokens.ability_private_access' => 'Token ger tillgång till privata data',

    'api_tokens.revoke' => 'Återkalla token',
    'api_tokens.revoke_confirm' => 'Vill du verkligen återkalla den här token? Det här steget kan inte ångras och token kan inte återställas.',
    'api_tokens.revoke_successful' => 'Token återkallades framgångsrikt.',

    'sso' => 'SSO',
    'sso_account_provider' => 'SSO-leverantör',
    'sso_account_id' => 'SSO ID',
    'sso_provider_disabled' => 'Den valda SSO-leverantören är inte tillgänglig. Vänligen välj en annan.',
    'sso_wrong_provider' => 'Det går inte att logga in med :currentProvider. Använd :userProvider för att logga in eller kontakta din administratör för att få hjälp.',

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
