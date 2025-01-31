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

    'register' => '注册',
    'register_welcome' => '欢迎访问 LinkAce！您已受邀加入此社交书签工具。请选择用户名和密码。注册成功后，您将被重定向到仪表板。',

    'failed' => '您输入的信息与我们的记录不匹配。',
    'throttle' => '登录失败次数过多，请 :seconds 秒后再试。',
    'unauthorized' => '登录未获授权。请联系您的管理员。',

    'confirm_title' => '需要确认',
    'confirm' => '请使用您当前的密码确认此操作。',
    'confirm_action' => '确认操作',

    'two_factor' => '双重验证',
    'two_factor_check' => '请输入您的双重验证应用程序提供的一次性密码。',
    'two_factor_with_recovery' => '验证恢复码',

    'api_tokens' => 'API 标记',
    'api_tokens.no_tokens_found' => '未找到 API 标记。',
    'api_tokens.generate' => '生成新的 API 令牌',
    'api_tokens.generate_short' => '生成令牌',
    'api_tokens.generate_help' => '使用 LinkAce API 时，API 标记用于验证您的身份。',
    'api_tokens.generated_successfully' => '应用程序接口令牌已成功生成：<code>:token</code>',
    'api_tokens.generated_help' => '请将此令牌妥善保管。如果您丢失了令牌，将<strong>无法</strong>找回。',
    'api_tokens.name' => '令牌名称',
    'api_tokens.name_help' => '为令牌选择一个名称。名称只能包含字母数字字符、破折号和下划线。如果您想为不同的用例或应用创建不同的令牌，这将非常有用。',

    'api_token_system' => '系统应用程序接口令牌',
    'api_tokens_system' => '系统应用程序接口令牌',
    'api_tokens.generate_help_system' => 'API 标记用于从其他应用程序或脚本访问 LinkAce API。默认情况下，只能访问公共或内部数据，但如果需要，可以授予令牌额外的私人数据访问权限。',
    'api_tokens.private_access' => '令牌可访问私人数据',
    'api_tokens.private_access_help' => '令牌可根据指定的能力访问和更改任何用户的私人链接、列表、标签和备注。',
    'api_tokens.abilities' => '代币能力',
    'api_tokens.abilities_select' => '选择令牌能力...',
    'api_tokens.abilities_help' => '选择令牌可具备的所有能力。以后不能更改能力。',
    'api_tokens.ability_private_access' => '令牌可访问私人数据',

    'api_tokens.revoke' => '撤销令牌',
    'api_tokens.revoke_confirm' => '您真的要撤销这个令牌吗？此步骤无法撤销，令牌也无法恢复。',
    'api_tokens.revoke_successful' => '令牌已成功撤销。',

    'sso' => 'SSO',
    'sso_account_provider' => 'SSO 提供商',
    'sso_account_id' => 'SSO ID',
    'sso_provider_disabled' => '所选 SSO 提供商不可用。请选择另一个。',
    'sso_wrong_provider' => '无法使用 :currentProvider 登录。请使用 :userProvider 登录，或联系管理员寻求帮助。',

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
