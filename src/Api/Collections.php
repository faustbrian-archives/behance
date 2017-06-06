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

class Collections extends AbstractApi
{
    protected $namespace = 'collections';

    public function search($q, $optionals = [])
    {
        $this->setQuery(array_merge($q, $optionals));

        return $this->get('collections/');
    }

    public function details($collectionId)
    {
        return $this->get("collections/$collectionId");
    }

    public function projects($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("collections/$collectionId/projects");
    }
}
