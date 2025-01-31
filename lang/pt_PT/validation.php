<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O atributo :deve ser aceite.',
    'active_url'           => 'O atributo :não é um URL válido.',
    'after'                => 'O atributo :deve ser uma data após :date.',
    'after_or_equal'       => 'O atributo :deve ser uma data posterior ou igual a :date.',
    'alpha'                => 'O atributo :só pode conter letras.',
    'alpha_dash'           => 'O atributo :só pode conter letras, números, traços e sublinhados.',
    'alpha_num'            => 'O atributo :só pode conter letras e números.',
    'array'                => 'O atributo :deve ser uma matriz.',
    'before'               => 'O atributo :deve ser uma data antes de :date.',
    'before_or_equal'      => 'O atributo :deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O atributo :deve estar entre :min e :max.',
        'file'    => 'O atributo :deve estar entre :min e :max kilobytes.',
        'string'  => 'O atributo :deve estar entre os caracteres :min e :max.',
        'array'   => 'O atributo :deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação do atributo :não corresponde.',
    'date'                 => 'O atributo :não é uma data válida.',
    'date_format'          => 'O atributo :não corresponde ao formato :format.',
    'different'            => 'O :attribute e o :other têm de ser diferentes.',
    'digits'               => 'O atributo :deve ser :digits dígitos.',
    'digits_between'       => 'O atributo :deve situar-se entre os dígitos :min e :max.',
    'dimensions'           => 'O atributo :tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo :attribute tem um valor duplicado.',
    'email'                => 'O atributo :deve ser um endereço de correio eletrónico válido.',
    'exists'               => 'O atributo :selecionado é inválido.',
    'file'                 => 'O atributo :deve ser um ficheiro.',
    'filled'               => 'O campo :attribute deve ter um valor.',
    'gt'                   => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file'    => 'O :attribute tem de ser superior ao :value kilobytes.',
        'string'  => 'O :attribute deve ser maior do que os caracteres :value.',
        'array'   => 'O :attribute deve ter mais do que :value items.',
    ],
    'gte'                  => [
        'numeric' => 'O :attribute tem de ser maior ou igual ao :value.',
        'file'    => 'O :attribute tem de ser maior ou igual :value kilobytes.',
        'string'  => 'O :attribute deve ser maior ou igual aos caracteres :value.',
        'array'   => 'O :attribute tem de ter :value items ou mais.',
    ],
    'image'                => 'O atributo :deve ser uma imagem.',
    'in'                   => 'O atributo :selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O atributo :deve ser um número inteiro.',
    'ip'                   => 'O atributo :deve ser um endereço IP válido.',
    'ipv4'                 => 'O atributo :deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O atributo :deve ser um endereço IPv6 válido.',
    'json'                 => 'O atributo :deve ser uma cadeia JSON válida.',
    'lt'                   => [
        'numeric' => 'O :attribute tem de ser inferior ao :value.',
        'file'    => 'O :attribute tem de ser inferior a :value kilobytes.',
        'string'  => 'O :attribute deve ter menos de :value caracteres.',
        'array'   => 'O :attribute deve ter menos do que :value items.',
    ],
    'lte'                  => [
        'numeric' => 'O :attribute tem de ser menor ou igual ao :value.',
        'file'    => 'O :atributo tem de ser inferior ou igual :valor kilobytes.',
        'string'  => 'O :attribute deve ser menor ou igual aos caracteres :value.',
        'array'   => 'O atributo :não pode ter mais do que itens :value.',
    ],
    'max'                  => [
        'numeric' => 'O atributo :não pode ser superior a :max.',
        'file'    => 'O atributo :não pode ser superior a :max kilobytes.',
        'string'  => 'O atributo :não pode ser maior do que :max caracteres.',
        'array'   => 'O atributo :não pode ter mais do que :max itens.',
    ],
    'mimes'                => 'O atributo :deve ser um ficheiro do tipo: :values.',
    'mimetypes'            => 'O atributo :deve ser um ficheiro do tipo: :values.',
    'min'                  => [
        'numeric' => 'O atributo :deve ser pelo menos :min.',
        'file'    => 'O :atributo tem de ser, pelo menos, :min kilobytes.',
        'string'  => 'O atributo :deve ter pelo menos :min caracteres.',
        'array'   => 'O atributo :deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O atributo :selecionado é inválido.',
    'not_regex'            => 'O formato do atributo :é inválido.',
    'numeric'              => 'O atributo :deve ser um número.',
    'present'              => 'O campo :attribute tem de estar presente.',
    'regex'                => 'O formato do atributo :é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório, a menos que :other esteja em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same'                 => 'O :attribute e o :other têm de coincidir.',
    'size'                 => [
        'numeric' => 'O atributo :deve ser :size.',
        'file'    => 'O :atributo tem de ser :size kilobytes.',
        'string'  => 'O :atributo tem de ser :tamanho caracteres.',
        'array'   => 'O atributo :deve conter itens :size.',
    ],
    'string'               => 'O atributo :deve ser uma cadeia de caracteres.',
    'timezone'             => 'O atributo :deve ser uma zona válida.',
    'unique'               => 'O atributo :já foi utilizado.',
    'uploaded'             => 'O atributo :não foi carregado.',
    'url'                  => 'O formato do atributo :é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'visibility' => [
            'visibility' => 'A Visibilidade deve ser 1 (pública), 2 (interna) ou 3 (privada).',
        ],
        'api_token_ability' => [
            'api_token_ability' => 'O token da API tem de ter, pelo menos, uma capacidade das capacidades predefinidas do token.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
