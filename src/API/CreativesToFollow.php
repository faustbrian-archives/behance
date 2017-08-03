<?php

declare(strict_types=1);

/*
 * This file is part of Behance PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Behance\API;

use BrianFaust\Http\HttpResponse;

class CreativesToFollow extends AbstractAPI
{
    public function lists(int $page = 1): HttpResponse
    {
        return $this->client->get('creativestofollow', compact('page'));
    }
}
