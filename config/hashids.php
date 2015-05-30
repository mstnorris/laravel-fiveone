<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt' => 'pDHMqPgA48fgx1AyvzwOHdjBHdsuA2JNnJbdix8xfT30Rf4rwJfWw0ELrbsHM4ru',
            'length' => '16',
            'alphabet' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
        ],

        'string_id' => [
            'salt' => 'WPZt2QEet9888xpVaKBO4McYJb7THKAiRkwIkjvNeFPnvWppPl5Cxk9KJjNRu33k',
            'length' => '6',
            'alphabet' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
        ],

        'one' => [
            'salt' => 'HwtNVtXT8wlXoSNnKrubuSDJqcwm9eIAVlLWwBG1rZjcwOCDjHEWrHH0SLQlhLkB',
            'length' => '16',
            'alphabet' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
        ],

        'two' => [
            'salt' => '9QgJ0oan2gO3pIlhQVCmPcfej6CgfVBbg0IYDKksIB6I29kUiRACPeIbPRtv2cUq',
            'length' => '16',
            'alphabet' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
        ],

        'three' => [
            'salt' => 'jZB6z2gvvv0LKN62SQOLYbEZyaUIeDXZQdr0Bqh5741kTwjA6w165pliIceotikS',
            'length' => '16',
            'alphabet' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
        ],

    ],

];
