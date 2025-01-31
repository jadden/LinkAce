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

    'register' => 'Iscrizione',
    'register_welcome' => 'Benvenuto su LinkAce! Sei stato invitato a partecipare a questo strumento di social bookmark. Si prega di selezionare un nome utente e una password. Dopo la registrazione riuscita, verrà reindirizzato alla dashboard.',

    'failed' => 'Credenziali non corrispondenti ai dati registrati.',
    'throttle' => 'Troppi tentativi di accesso. Riprova tra :seconds secondi.',
    'unauthorized' => 'Login non autorizzato. Si prega di contattare l\'amministratore.',

    'confirm_title' => 'Conferma obbligatoria',
    'confirm' => 'Si prega di confermare questa azione utilizzando la password attuale.',
    'confirm_action' => 'Conferma azione',

    'two_factor' => 'Autenticazione a due fattori',
    'two_factor_check' => 'Inserisci ora la password monouso fornita dalla tua app Autenticazione a due fattori.',
    'two_factor_with_recovery' => 'Autenticazione con il codice di recupero',

    'api_tokens' => 'Token API',
    'api_tokens.no_tokens_found' => 'Nessun Token API trovato.',
    'api_tokens.generate' => 'Genera un nuovo Token API',
    'api_tokens.generate_short' => 'Genera Token',
    'api_tokens.generate_help' => 'I token API sono usati per autenticarsi quando si utilizza l\'API LinkAce.',
    'api_tokens.generated_successfully' => 'Il token API è stato generato con successo: <code>:token</code>',
    'api_tokens.generated_help' => 'Si prega di memorizzare questo token in un luogo sicuro. È <strong>non</strong> possibile recuperare il token se lo perdi.',
    'api_tokens.name' => 'Nome Token',
    'api_tokens.name_help' => 'Scegli un nome per il token. Il nome può contenere solo caratteri alfanumerici, trattini e trattini bassi. Utile se si desidera creare gettoni separati per diversi casi di utilizzo o applicazioni.',

    'api_token_system' => 'System API Token',
    'api_tokens_system' => 'Token API Di Sistema',
    'api_tokens.generate_help_system' => 'I token API sono utilizzati per accedere alle API LinkAce da altre applicazioni o script. Per impostazione predefinita, solo i dati pubblici o interni sono accessibili, ma i token possono avere un accesso supplementare ai dati privati, se necessario.',
    'api_tokens.private_access' => 'Token può accedere ai dati privati',
    'api_tokens.private_access_help' => 'Il token può accedere e modificare link privati, elenchi, tag e note di qualsiasi utente in base alle abilità specificate.',
    'api_tokens.abilities' => 'Abilità token',
    'api_tokens.abilities_select' => 'Seleziona abilità token...',
    'api_tokens.abilities_help' => 'Seleziona tutte le abilità che un token può avere. Le abilità non possono essere modificate più tardi.',
    'api_tokens.ability_private_access' => 'Token può accedere ai dati privati',

    'api_tokens.revoke' => 'Revoca token',
    'api_tokens.revoke_confirm' => 'Vuoi davvero revocare questo token? Questo passaggio non può essere annullato e il token non può essere recuperato.',
    'api_tokens.revoke_successful' => 'Il token è stato revocato con successo.',

    'sso' => 'SSO',
    'sso_account_provider' => 'Provider SSO',
    'sso_account_id' => 'SSO ID',
    'sso_provider_disabled' => 'Il provider SSO selezionato non è disponibile. Prego sceglierne un altro.',
    'sso_wrong_provider' => 'Impossibile effettuare il login con :currentProvider. Utilizza :userProvider per effettuare il login o contatta l\'amministratore per ricevere aiuto.',

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
