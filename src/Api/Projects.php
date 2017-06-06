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

class Projects extends AbstractApi
{
    public function search($q = null, $optionals = [])
    {
        $parameters = compact('q');

        if (! empty($optionals)) {
            $parameters = array_merge($q, $optionals);
        }

        $this->setQuery($parameters);

        return $this->get('projects');
    }

    public function details($projectId)
    {
        return $this->get("projects/$projectId");
    }

    public function comments($projectId)
    {
        return $this->get("projects/$projectId/comments");
    }
}
