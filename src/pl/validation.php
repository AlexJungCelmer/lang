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

    'accepted'             => 'Pole :attribute musi zosta� zaakceptowane.',
    'active_url'           => 'Pole :attribute jest nieprawid�owym adresem URL.',
    'after'                => 'Pole :attribute musi by� dat� p�niejsz� od :date.',
    'after_or_equal'       => 'Pole :attribute musi by� dat� nie wcze�niejsz� ni� :date.',
    'alpha'                => 'Pole :attribute mo�e zawiera� jedynie litery.',
    'alpha_dash'           => 'Pole :attribute mo�e zawiera� jedynie litery, cyfry i my�lniki.',
    'alpha_num'            => 'Pole :attribute mo�e zawiera� jedynie litery i cyfry.',
    'array'                => 'Pole :attribute musi by� tablic�.',
    'before'               => 'Pole :attribute musi by� dat� wcze�niejsz� od :date.',
    'before_or_equal'      => 'Pole :attribute musi by� dat� nie p�niejsz� ni� :date.',
    'between'              => [
        'numeric' => 'Pole :attribute musi zawiera� si� w granicach :min - :max.',
        'file'    => 'Pole :attribute musi zawiera� si� w granicach :min - :max kilobajt�w.',
        'string'  => 'Pole :attribute musi zawiera� si� w granicach :min - :max znak�w.',
        'array'   => 'Pole :attribute musi sk�ada� si� z :min - :max element�w.',
    ],
    'boolean'              => 'Pole :attribute musi mie� warto�� logiczn� prawda albo fa�sz.',
    'confirmed'            => 'Potwierdzenie pola :attribute nie zgadza si�.',
    'date'                 => 'Pole :attribute nie jest prawid�ow� dat�.',
    'date_equals'          => 'Pole :attribute musi by� dat� r�wn� :date.',
    'date_format'          => 'Pole :attribute nie jest w formacie :format.',
    'different'            => 'Pole :attribute oraz :other musz� si� r�ni�.',
    'digits'               => 'Pole :attribute musi sk�ada� si� z :digits cyfr.',
    'digits_between'       => 'Pole :attribute musi mie� od :min do :max cyfr.',
    'dimensions'           => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct'             => 'Pole :attribute ma zduplikowane warto�ci.',
    'email'                => 'Pole :attribute nie jest poprawnym adresem e-mail.',
    'ends_with'            => 'Pole :attribute musi ko�czy� si� jedn� z nast�puj�cych warto�ci: :values.',
    'exists'               => 'Zaznaczone pole :attribute jest nieprawid�owe.',
    'file'                 => 'Pole :attribute musi by� plikiem.',
    'filled'               => 'Pole :attribute nie mo�e by� puste.',
    'gt'                   => [
        'numeric' => 'Pole :attribute musi by� wi�ksze ni� :value.',
        'file'    => 'Pole :attribute musi by� wi�ksze ni� :value kilobajt�w.',
        'string'  => 'Pole :attribute musi by� d�u�sze ni� :value znak�w.',
        'array'   => 'Pole :attribute musi mie� wi�cej ni� :value element�w.',
    ],
    'gte'                  => [
        'numeric' => 'Pole :attribute musi by� wi�ksze lub r�wne :value.',
        'file'    => 'Pole :attribute musi by� wi�ksze lub r�wne :value kilobajt�w.',
        'string'  => 'Pole :attribute musi by� d�u�sze lub r�wne :value znak�w.',
        'array'   => 'Pole :attribute musi mie� :value lub wi�cej element�w.',
    ],
    'image'                => 'Pole :attribute musi by� obrazkiem.',
    'in'                   => 'Zaznaczony element :attribute jest nieprawid�owy.',
    'in_array'             => 'Pole :attribute nie znajduje si� w :other.',
    'integer'              => 'Pole :attribute musi by� liczb� ca�kowit�.',
    'ip'                   => 'Pole :attribute musi by� prawid�owym adresem IP.',
    'ipv4'                 => 'Pole :attribute musi by� prawid�owym adresem IPv4.',
    'ipv6'                 => 'Pole :attribute musi by� prawid�owym adresem IPv6.',
    'json'                 => 'Pole :attribute musi by� poprawnym ci�giem znak�w JSON.',
    'lt'                   => [
        'numeric' => 'Pole :attribute musi by� mniejsze ni� :value.',
        'file'    => 'Pole :attribute musi by� mniejsze ni� :value kilobajt�w.',
        'string'  => 'Pole :attribute musi by� kr�tsze ni� :value znak�w.',
        'array'   => 'Pole :attribute musi mie� mniej ni� :value element�w.',
    ],
    'lte'                  => [
        'numeric' => 'Pole :attribute musi by� mniejsze lub r�wne :value.',
        'file'    => 'Pole :attribute musi by� mniejsze lub r�wne :value kilobajt�w.',
        'string'  => 'Pole :attribute musi by� kr�tsze lub r�wne :value znak�w.',
        'array'   => 'Pole :attribute musi mie� :value lub mniej element�w.',
    ],
    'max'                  => [
        'numeric' => 'Pole :attribute nie mo�e by� wi�ksze ni� :max.',
        'file'    => 'Pole :attribute nie mo�e by� wi�ksze ni� :max kilobajt�w.',
        'string'  => 'Pole :attribute nie mo�e by� d�u�sze ni� :max znak�w.',
        'array'   => 'Pole :attribute nie mo�e mie� wi�cej ni� :max element�w.',
    ],
    'mimes'                => 'Pole :attribute musi by� plikiem typu :values.',
    'mimetypes'            => 'Pole :attribute musi by� plikiem typu :values.',
    'min'                  => [
        'numeric' => 'Pole :attribute musi by� nie mniejsze od :min.',
        'file'    => 'Pole :attribute musi mie� przynajmniej :min kilobajt�w.',
        'string'  => 'Pole :attribute musi mie� przynajmniej :min znak�w.',
        'array'   => 'Pole :attribute musi mie� przynajmniej :min element�w.',
    ],
    'not_in'               => 'Zaznaczony :attribute jest nieprawid�owy.',
    'not_regex'            => 'Format pola :attribute jest nieprawid�owy.',
    'numeric'              => 'Pole :attribute musi by� liczb�.',
    'password'             => 'Has�o jest nieprawid�owe.',
    'present'              => 'Pole :attribute musi by� obecne.',
    'regex'                => 'Format pola :attribute jest nieprawid�owy.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other ma warto�� :value.',
    'required_unless'      => 'Pole :attribute jest wymagane je�eli :other nie znajduje si� w :values.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole :attribute jest wymagane gdy wszystkie :values s� obecne.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy �adne z :values nie s� obecne.',
    'same'                 => 'Pole :attribute i :other musz� by� takie same.',
    'size'                 => [
        'numeric' => 'Pole :attribute musi mie� :size.',
        'file'    => 'Pole :attribute musi mie� :size kilobajt�w.',
        'string'  => 'Pole :attribute musi mie� :size znak�w.',
        'array'   => 'Pole :attribute musi zawiera� :size element�w.',
    ],
    'starts_with'          => 'Pole :attribute musi zaczyna� si� jedn� z nast�puj�cych warto�ci: :values.',
    'string'               => 'Pole :attribute musi by� ci�giem znak�w.',
    'timezone'             => 'Pole :attribute musi by� prawid�ow� stref� czasow�.',
    'unique'               => 'Taki :attribute ju� wyst�puje.',
    'uploaded'             => 'Nie uda�o si� wgra� pliku :attribute.',
    'url'                  => 'Format pola :attribute jest nieprawid�owy.',
    'uuid'                 => 'Pole :attribute musi by� poprawnym identyfikatorem UUID.',

    'incorrect_password' => 'Podane has�o jest nieprawid�owe.',

];
