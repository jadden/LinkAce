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

    'register' => 'Zarejestruj się',
    'register_welcome' => 'Witaj w LinkAce! Zostałeś zaproszony do dołączenia do tego narzędzia społecznościowego. Wybierz nazwę użytkownika i hasło. Po pomyślnej rejestracji zostaniesz przekierowany do pulpitu nawigacyjnego.',

    'failed' => 'Te dane logowania nie pasują do naszych wpisów.',
    'throttle' => 'Za dużo nieudanych prób logowania. Proszę spróbować za :seconds sekund.',
    'unauthorized' => 'Logowanie nieautoryzowane. Skontaktuj się z administratorem.',

    'confirm_title' => 'Wymagane potwierdzenie',
    'confirm' => 'Potwierdź tę czynność używając aktualnego hasła.',
    'confirm_action' => 'Potwierdź czynność',

    'two_factor' => 'Uwierzytelnianie dwuskładnikowe',
    'two_factor_check' => 'Wprowadź hasło jednorazowe dostarczone przez aplikację uwierzytelniania dwuskładnikowego.',
    'two_factor_with_recovery' => 'Uwierzytelnianie za pomocą kodu odzyskiwania',

    'api_tokens' => 'Tokeny API',
    'api_tokens.no_tokens_found' => 'Nie znaleziono tokenów API.',
    'api_tokens.generate' => 'Wygeneruj nowy token API',
    'api_tokens.generate_short' => 'Wygeneruj token',
    'api_tokens.generate_help' => 'Tokeny API służą do uwierzytelniania się podczas korzystania z API LinkAce.',
    'api_tokens.generated_successfully' => 'Token API został wygenerowany pomyślnie: <code>:token</code>',
    'api_tokens.generated_help' => 'Przechowuj ten token w bezpiecznym miejscu. <strong>Nie</strong> ma możliwości odzyskania tokena, jeśli go zgubisz.',
    'api_tokens.name' => 'Nazwa tokena',
    'api_tokens.name_help' => 'Wybierz nazwę dla swojego tokena. Nazwa może zawierać tylko znaki alfanumeryczne, myślniki i podkreślenia. Przydatne, jeśli chcesz utworzyć oddzielne tokeny dla różnych przypadków użycia lub aplikacji.',

    'api_token_system' => 'Token API systemu',
    'api_tokens_system' => 'Tokeny API systemu',
    'api_tokens.generate_help_system' => 'Tokeny API służą do uzyskiwania dostępu do API LinkAce z innych aplikacji lub skryptów. Domyślnie dostępne są tylko dane publiczne lub wewnętrzne, ale w razie potrzeby tokenom można przyznać dodatkowy dostęp do danych prywatnych.',
    'api_tokens.private_access' => 'Token może uzyskać dostęp do prywatnych danych',
    'api_tokens.private_access_help' => 'Token może uzyskiwać dostęp i zmieniać prywatne linki, listy, tagi i notatki dowolnego użytkownika na podstawie określonych umiejętności.',
    'api_tokens.abilities' => 'Zdolności żetonów',
    'api_tokens.abilities_select' => 'Wybierz zdolności żetonu...',
    'api_tokens.abilities_help' => 'Wybierz wszystkie zdolności, które może posiadać żeton. Zdolności nie można później zmienić.',
    'api_tokens.ability_private_access' => 'Token może uzyskać dostęp do prywatnych danych',

    'api_tokens.revoke' => 'Cofnij token',
    'api_tokens.revoke_confirm' => 'Czy naprawdę chcesz odwołać ten token? Tego kroku nie można cofnąć, a tokena nie można odzyskać.',
    'api_tokens.revoke_successful' => 'Token został pomyślnie odwołany.',

    'sso' => 'SSO',
    'sso_account_provider' => 'Dostawca SSO',
    'sso_account_id' => 'IDENTYFIKATOR SSO',
    'sso_provider_disabled' => 'Wybrany dostawca SSO nie jest dostępny. Wybierz innego.',
    'sso_wrong_provider' => 'Nie można zalogować się przy użyciu :currentProvider. Użyj :userProvider do zalogowania się lub skontaktuj się z administratorem w celu uzyskania pomocy.',

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
