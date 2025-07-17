<?php

/**
 * This file is part of szczyglis/php-ultra-small-proxy.
 *
 * (c) Marcin Szczyglinski <szczyglis@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;
use Szczyglis\UltraSmallProxy\UltraSmallProxy;
use Szczyglis\UltraSmallProxy\Config;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $config = new Config();
        $config->set('toolbar', false);
        $proxy = new UltraSmallProxy($config);
        $output = $proxy->load('https://github.com/szczyglis-dev/php-ultra-small-proxy');
        $this->assertStringContainsString('<title>GitHub - szczyglis-dev/php-ultra-small-proxy: [PHP] Lightweight proxy with full support for sessions, cookies, POST/FORM submissions, and URL rewriting. The proxy offers two methods of URL rewriting: XML and Regex. It also includes features such as HTTP Auth, caching, and more.</title>', $output);
    }
}
