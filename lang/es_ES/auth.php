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

    'register' => 'Registrarse',
    'register_welcome' => '¡Bienvenido a LinkAce! Has sido invitado a unirte a esta herramienta de marcadores sociales. Por favor, seleccione un nombre de usuario y una contraseña. Después del registro exitoso, será redirigido al panel de control.',

    'failed' => 'Estas credenciales no coinciden con nuestros registros.',
    'throttle' => 'Demasiados intentos de inicio de sesión. Por favor, inténtalo de nuevo en :seconds segundos.',
    'unauthorized' => 'Inicio de sesión no autorizado. Por favor, póngase en contacto con su administrador.',

    'confirm_title' => 'Confirmación requerida',
    'confirm' => 'Por favor, confirma esta acción usando tu contraseña actual.',
    'confirm_action' => 'Confirmar acción',

    'two_factor' => 'Autenticación de dos factores',
    'two_factor_check' => 'Por favor, introduzca la contraseña de una sola vez proporcionada por su aplicación de autenticación de dos factores ahora.',
    'two_factor_with_recovery' => 'Autenticar con Código de Recuperación',

    'api_tokens' => 'Tokens API',
    'api_tokens.no_tokens_found' => 'No se encontraron tokens API.',
    'api_tokens.generate' => 'Generar un nuevo token API',
    'api_tokens.generate_short' => 'Generar token',
    'api_tokens.generate_help' => 'Los tokens de API se utilizan para autenticarse cuando se utiliza la API LinkAce.',
    'api_tokens.generated_successfully' => 'El token de API se generó correctamente: <code>:token</code>',
    'api_tokens.generated_help' => 'Por favor, almacena este token en un lugar seguro. <strong>No</strong> es posible recuperar tu token si lo pierdes.',
    'api_tokens.name' => 'Nombre del token',
    'api_tokens.name_help' => 'Elige un nombre para tu token. El nombre solo puede contener caracteres alfanuméricos, guiones y guiones bajos. Es útil para crear tokens separados para diferentes casos de uso o aplicaciones.',

    'api_token_system' => 'Sistema API Token',
    'api_tokens_system' => 'Tokens API del sistema',
    'api_tokens.generate_help_system' => 'Los tokens de API se utilizan para acceder a la API de LinkAce desde otras aplicaciones o scripts. Por defecto, sólo los datos públicos o internos son accesibles, pero los tokens pueden tener acceso adicional a los datos privados si es necesario.',
    'api_tokens.private_access' => 'El token puede acceder a datos privados',
    'api_tokens.private_access_help' => 'El token puede acceder y cambiar enlaces privados, listas, etiquetas y notas de cualquier usuario basándose en las habilidades especificadas.',
    'api_tokens.abilities' => 'Habilidades de Token',
    'api_tokens.abilities_select' => 'Seleccionar habilidades del token...',
    'api_tokens.abilities_help' => 'Selecciona todas las habilidades que un token puede tener. Las habilidades no se pueden cambiar más tarde.',
    'api_tokens.ability_private_access' => 'El token puede acceder a datos privados',

    'api_tokens.revoke' => 'Revocar token',
    'api_tokens.revoke_confirm' => '¿Realmente quieres revocar este token? Este paso no se puede deshacer y el token no se puede recuperar.',
    'api_tokens.revoke_successful' => 'El token se revocó correctamente.',

    'sso' => 'SSO',
    'sso_account_provider' => 'Proveedor SSO',
    'sso_account_id' => 'ID SSO',
    'sso_provider_disabled' => 'El proveedor SSO seleccionado no está disponible. Por favor, elija otro.',
    'sso_wrong_provider' => 'No se puede iniciar sesión con :currentProvider. Por favor usa :userProvider para iniciar sesión, o contacta a tu administrador para obtener ayuda.',

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
