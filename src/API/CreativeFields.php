<?php

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

class CreativeFields extends AbstractAPI
{
    public function lists(): HttpResponse
    {
        return $this->client->get('fields');
    }
}
