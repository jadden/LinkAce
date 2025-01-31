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

    'accepted'             => 'Attributet :måste accepteras.',
    'active_url'           => ':-attributet är inte en giltig URL.',
    'after'                => ':-attributet måste vara ett datum efter :date.',
    'after_or_equal'       => ':-attributet måste vara ett datum efter eller lika med :date.',
    'alpha'                => 'Attributet :får endast innehålla bokstäver.',
    'alpha_dash'           => ':-attributet får endast innehålla bokstäver, siffror, bindestreck och understreck.',
    'alpha_num'            => 'Attributet :får endast innehålla bokstäver och siffror.',
    'array'                => ':-attributet måste vara en matris.',
    'before'               => ':-attributet måste vara ett datum före :date.',
    'before_or_equal'      => ':-attributet måste vara ett datum före eller lika med :date.',
    'between'              => [
        'numeric' => ':-attributet måste ligga mellan :min och :max.',
        'file'    => ':-attributet måste vara mellan :min och :max kilobyte.',
        'string'  => ':-attributet måste vara mellan :min och :max tecken.',
        'array'   => ':-attributet måste ha mellan :min och :max objekt.',
    ],
    'boolean'              => 'Fältet :attribute måste vara true eller false.',
    'confirmed'            => 'Bekräftelsen av :attributet stämmer inte överens.',
    'date'                 => ':-attributet är inte ett giltigt datum.',
    'date_format'          => 'Attributet :stämmer inte överens med formatet :format.',
    'different'            => 'Attributen :attribute och :other måste vara olika.',
    'digits'               => 'Attributet :måste vara :digits siffror.',
    'digits_between'       => 'Attributet :måste ligga mellan siffrorna :min och :max.',
    'dimensions'           => 'Attributet :har ogiltiga bilddimensioner.',
    'distinct'             => 'Fältet :attribute har ett duplicerat värde.',
    'email'                => ':-attributet måste vara en giltig e-postadress.',
    'exists'               => 'Det valda :-attributet är ogiltigt.',
    'file'                 => ':-attributet måste vara en fil.',
    'filled'               => 'Fältet :attribute måste ha ett värde.',
    'gt'                   => [
        'numeric' => 'Attributet :attribute måste vara större än :value.',
        'file'    => 'Attributet :attribute måste vara större än värdet :value kilobytes.',
        'string'  => 'Tecknen i :attribute måste vara större än tecknen i :value.',
        'array'   => 'Attributet :attribute måste ha fler objekt än :value.',
    ],
    'gte'                  => [
        'numeric' => 'Attributet :attribute måste vara större än eller lika med :value.',
        'file'    => 'Attributet :attribute måste vara större än eller lika med :value kilobytes.',
        'string'  => 'Attributet :attribute måste vara större än eller lika med :value-tecknen.',
        'array'   => 'Attributet :attribute måste ha :value-objekt eller fler.',
    ],
    'image'                => ':-attributet måste vara en bild.',
    'in'                   => 'Det valda :-attributet är ogiltigt.',
    'in_array'             => 'Fältet :attribute finns inte i :other.',
    'integer'              => ':-attributet måste vara ett heltal.',
    'ip'                   => 'Attributet :måste vara en giltig IP-adress.',
    'ipv4'                 => ':-attributet måste vara en giltig IPv4-adress.',
    'ipv6'                 => ':-attributet måste vara en giltig IPv6-adress.',
    'json'                 => 'Attributet :måste vara en giltig JSON-sträng.',
    'lt'                   => [
        'numeric' => 'Attributet :attribute måste vara mindre än :value.',
        'file'    => ':attributet måste vara mindre än :värdet kilobyte.',
        'string'  => 'Attributet :attribute måste vara mindre än tecken i :value.',
        'array'   => 'Attributet :attribute måste ha färre objekt än :value.',
    ],
    'lte'                  => [
        'numeric' => 'Attributet :attribute måste vara mindre än eller lika med :value.',
        'file'    => 'Attributet :attribute måste vara mindre än eller lika med :value kilobytes.',
        'string'  => 'Attributet :attribute måste vara mindre än eller lika med :value-tecken.',
        'array'   => 'Attributet :attribute får inte ha fler poster än :value.',
    ],
    'max'                  => [
        'numeric' => ':-attributet får inte vara större än :max.',
        'file'    => ':-attributet får inte vara större än :max kilobyte.',
        'string'  => ':-attributet får inte vara större än :max tecken.',
        'array'   => ':-attributet får inte ha fler objekt än :max.',
    ],
    'mimes'                => 'Attributet :måste vara en fil av typen: :values.',
    'mimetypes'            => 'Attributet :måste vara en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':-attributet måste vara minst :min.',
        'file'    => ':-attributet måste vara minst :min kilobyte.',
        'string'  => ':-attributet måste innehålla minst :min-tecken.',
        'array'   => ':-attributet måste ha minst :min-objekt.',
    ],
    'not_in'               => 'Det valda :-attributet är ogiltigt.',
    'not_regex'            => ':-attributets format är ogiltigt.',
    'numeric'              => ':-attributet måste vara ett tal.',
    'present'              => 'Fältet :attribute måste finnas med.',
    'regex'                => ':-attributets format är ogiltigt.',
    'required'             => 'Fältet :attribute är obligatoriskt.',
    'required_if'          => 'Fältet :attribute är obligatoriskt när :other är :value.',
    'required_unless'      => 'Fältet :attribute är obligatoriskt om inte :other finns i :values.',
    'required_with'        => 'Fältet :attribute är obligatoriskt när :values finns med.',
    'required_with_all'    => 'Fältet :attribute är obligatoriskt när :values finns med.',
    'required_without'     => 'Fältet :attribute är obligatoriskt när :values inte finns med.',
    'required_without_all' => 'Fältet :attribute är obligatoriskt om inget av :värdena finns med.',
    'same'                 => 'Attributen :attribute och :other måste stämma överens.',
    'size'                 => [
        'numeric' => 'Attributet :måste vara :size.',
        'file'    => 'Attributet :måste vara :size kilobyte.',
        'string'  => 'Attributet :måste vara :size-tecken.',
        'array'   => ':-attributet måste innehålla :-storleksobjekt.',
    ],
    'string'               => ':-attributet måste vara en sträng.',
    'timezone'             => ':-attributet måste vara en giltig zon.',
    'unique'               => 'Attributet :har redan tagits i anspråk.',
    'uploaded'             => 'Uppladdningen av :-attributet misslyckades.',
    'url'                  => ':-attributets format är ogiltigt.',

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
            'visibility' => 'Visibility måste vara antingen 1 (public), 2 (internal) eller 3 (private).',
        ],
        'api_token_ability' => [
            'api_token_ability' => 'API-token måste ha minst en förmåga från de fördefinierade tokenförmågorna.',
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
