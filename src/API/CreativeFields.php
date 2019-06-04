<?php

declare(strict_types=1);

/*
 * This file is part of Behance PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Behance\API;

use Plients\Http\HttpResponse;

class CreativeFields extends AbstractAPI
{
    public function lists(): HttpResponse
    {
        return $this->client->get('fields');
    }
}
