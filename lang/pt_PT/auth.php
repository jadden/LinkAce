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

    'register' => 'Regista-te',
    'register_welcome' => 'Bem-vindo ao LinkAce! Foste convidado a juntar-te a esta ferramenta de bookmarking social. Por favor, seleciona um nome de utilizador e uma palavra-passe. Após o registo bem sucedido, serás redireccionado para o painel de controlo.',

    'failed' => 'As credenciais indicadas não coincidem com as registadas no sistema.',
    'throttle' => 'Tentativas de mais para entrar na sua conta foi atingido. Por favor tente novamente dentro de :seconds segundos.',
    'unauthorized' => 'Login não autorizado. Por favor, contacta o teu administrador.',

    'confirm_title' => 'Confirmação obrigatória',
    'confirm' => 'Por favor, confirme esta ação usando sua senha atual.',
    'confirm_action' => 'Confirmação',

    'two_factor' => 'Autenticação de dois fatores',
    'two_factor_check' => 'Digite a senha única fornecida pelo seu aplicativo de Autenticação em Dois Fatores agora.',
    'two_factor_with_recovery' => 'Autenticar com Código de Recuperação',

    'api_tokens' => 'Tokens API',
    'api_tokens.no_tokens_found' => 'Não encontraste nenhum Token de API.',
    'api_tokens.generate' => 'Gera um novo Token de API',
    'api_tokens.generate_short' => 'Gerar Token',
    'api_tokens.generate_help' => 'Os tokens da API são utilizados para te autenticares quando utilizas a API do LinkAce.',
    'api_tokens.generated_successfully' => 'O token da API foi gerado com sucesso: <code>:token</code>',
    'api_tokens.generated_help' => 'Guarda esta ficha num local seguro. <strong>Não</strong> é possível recuperar a tua ficha se a perderes.',
    'api_tokens.name' => 'Nome do token',
    'api_tokens.name_help' => 'Escolhe um nome para o teu token. O nome só pode conter caracteres alfanuméricos, traços e sublinhados. É útil se quiseres criar tokens separados para diferentes casos de utilização ou aplicações.',

    'api_token_system' => 'Token da API do sistema',
    'api_tokens_system' => 'Tokens da API do sistema',
    'api_tokens.generate_help_system' => 'Os tokens da API são utilizados para aceder à API do LinkAce a partir de outras aplicações ou scripts. Por defeito, apenas os dados públicos ou internos são acessíveis, mas os tokens podem ter acesso adicional a dados privados, se necessário.',
    'api_tokens.private_access' => 'O token pode aceder a dados privados',
    'api_tokens.private_access_help' => 'O token pode aceder e alterar ligações privadas, listas, etiquetas e notas de qualquer utilizador com base nas capacidades especificadas.',
    'api_tokens.abilities' => 'Capacidades de símbolos',
    'api_tokens.abilities_select' => 'Seleciona as capacidades da ficha...',
    'api_tokens.abilities_help' => 'Seleciona todas as habilidades que uma ficha pode ter. As habilidades não podem ser alteradas mais tarde.',
    'api_tokens.ability_private_access' => 'O token pode aceder a dados privados',

    'api_tokens.revoke' => 'Revoga o token',
    'api_tokens.revoke_confirm' => 'Queres mesmo revogar este token? Este passo não pode ser anulado e o token não pode ser recuperado.',
    'api_tokens.revoke_successful' => 'O token foi revogado com sucesso.',

    'sso' => 'SSO',
    'sso_account_provider' => 'Fornecedor de SSO',
    'sso_account_id' => 'ID SSO',
    'sso_provider_disabled' => 'O fornecedor de SSO selecionado não está disponível. Escolhe outro.',
    'sso_wrong_provider' => 'Não é possível iniciar sessão com :currentProvider. Utiliza :userProvider para iniciar sessão ou contacta o teu administrador para obter ajuda.',

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
