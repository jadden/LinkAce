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

    'register' => 'Regisztráció',
    'register_welcome' => 'Üdvözöljük a LinkAce-nál! Meghívást kapott, hogy csatlakozzon ehhez a közösségi könyvjelző eszközhöz. Kérjük, válasszon egy felhasználónevet és egy jelszót. A sikeres regisztráció után átirányítjuk a műszerfalra.',

    'failed' => 'Rossz azonosító-jelszó páros.',
    'throttle' => 'Túl sok bejelentkezési kísérlet. Kérjük, próbálkozzon újra :seconds másodperc múlva.',
    'unauthorized' => 'Bejelentkezés jogosulatlan. Kérjük, lépjen kapcsolatba a rendszergazdával.',

    'confirm_title' => 'Megerősítés szükséges',
    'confirm' => 'Kérjük, erősítse meg ezt a műveletet az aktuális jelszóval.',
    'confirm_action' => 'Művelet megerősítése',

    'two_factor' => 'Kétfaktoros hitelesítés',
    'two_factor_check' => 'Kérjük, most adja meg a kétfaktoros hitelesítési alkalmazás által megadott egyszer használatos jelszót.',
    'two_factor_with_recovery' => 'Hitelesítés helyreállítási kóddal',

    'api_tokens' => 'API token',
    'api_tokens.no_tokens_found' => 'Nem találtunk API-tokeneket.',
    'api_tokens.generate' => 'Új API token generálása',
    'api_tokens.generate_short' => 'Token generálása',
    'api_tokens.generate_help' => 'Az API-tokenek a LinkAce API használatakor a hitelesítésre szolgálnak.',
    'api_tokens.generated_successfully' => 'Az API token sikeresen generálódott: <code>:token</code>',
    'api_tokens.generated_help' => 'Kérjük, hogy ezt a zsetont biztonságos helyen tárolja. Ha elveszíti a jelszót, azt <strong>nem</strong> lehet visszaszerezni.',
    'api_tokens.name' => 'Token neve',
    'api_tokens.name_help' => 'Válasszon nevet a tokenjének. A név csak alfanumerikus karaktereket, kötőjeleket és aláhúzásokat tartalmazhat. Hasznos, ha különböző felhasználási esetekhez vagy alkalmazásokhoz külön tokeneket szeretne létrehozni.',

    'api_token_system' => 'Rendszer API Token',
    'api_tokens_system' => 'Rendszer API tokenek',
    'api_tokens.generate_help_system' => 'Az API-tokeneket a LinkAce API más alkalmazásokból vagy szkriptekből történő eléréséhez használják. Alapértelmezés szerint csak a nyilvános vagy belső adatokhoz lehet hozzáférni, de a tokenek szükség esetén további hozzáférést biztosíthatnak a privát adatokhoz.',
    'api_tokens.private_access' => 'A token hozzáférhet a személyes adatokhoz',
    'api_tokens.private_access_help' => 'A token a megadott képességek alapján bármely felhasználó privát linkjeihez, listáihoz, címkéihez és jegyzeteihez hozzáférhet és módosíthatja azokat.',
    'api_tokens.abilities' => 'Token képességek',
    'api_tokens.abilities_select' => 'Jelképes képességek kiválasztása...',
    'api_tokens.abilities_help' => 'Válassza ki az összes képességet, amellyel egy token rendelkezhet. A képességek később nem módosíthatók.',
    'api_tokens.ability_private_access' => 'A token hozzáférhet a személyes adatokhoz',

    'api_tokens.revoke' => 'Token visszavonása',
    'api_tokens.revoke_confirm' => 'Tényleg vissza akarja vonni ezt a jelszót? Ezt a lépést nem lehet visszacsinálni, és a token nem állítható vissza.',
    'api_tokens.revoke_successful' => 'A tokent sikeresen visszavonták.',

    'sso' => 'SSO',
    'sso_account_provider' => 'SSO szolgáltató',
    'sso_account_id' => 'SSO AZONOSÍTÓ',
    'sso_provider_disabled' => 'A kiválasztott SSO-szolgáltató nem elérhető. Kérjük, válasszon egy másikat.',
    'sso_wrong_provider' => 'Nem sikerült bejelentkezni a :currentProviderrel. Kérjük, használja a :userProvider-t a bejelentkezéshez, vagy kérjen segítséget a rendszergazdától.',

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
