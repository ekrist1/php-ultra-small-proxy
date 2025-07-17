<?php

/**
 * This file is part of szczyglis/php-ultra-small-proxy.
 *
 * (c) Marcin Szczyglinski <szczyglis@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'proxy' => [
        'init' => true,
        'method' => 'GET',
        'source' => 'domain', // domain | ip
        'rewrite' => 'REGEX', // REGEX | REGEX2 | REGEX3 | DOM
        'rewrite_url' => true,
        'rewrite_img' => true,
        'rewrite_js' => true,
        'rewrite_css' => true,
        'rewrite_form' => true,
        'rewrite_video' => true,
        'rewrite_ip' => true,
        'toolbar' => true,
        'raw' => true,
        'cache' => [
            'enabled' => true,
            'path' => __DIR__ . '/../../cache',
            'ttl' => 3600,
        ],
        'cookie' => [
            'path' => __DIR__ . '/../../cookies',
        ],
        'debug' => [
            'enabled' => true,
        ],
    ],
];
