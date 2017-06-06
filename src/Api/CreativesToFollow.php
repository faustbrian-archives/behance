<?php

/*
 * This file is part of Behance PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Behance\Api;

use BrianFaust\Unified\AbstractApi;

class CreativesToFollow extends AbstractApi
{
    public function lists($page = 1)
    {
        return $this->get('creativestofollow', compact('page'));
    }
}
