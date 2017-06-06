<?php

/*
 * This file is part of Behance PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Behance;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\Behance\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_url' => 'https://www.behance.net/v2/',
        'headers' => [
           'User-Agent' => 'BrianFaust/Behance',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
