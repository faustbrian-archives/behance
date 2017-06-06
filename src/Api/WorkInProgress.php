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

class WorkInProgress extends AbstractApi
{
    public function search($q, $optionals = [])
    {
        $this->setQuery(array_merge($q, $optionals));

        return $this->get('wips');
    }

    public function details($wipId)
    {
        return $this->get("wips/$wipId");
    }

    public function revision($wipId, $revisionId)
    {
        return $this->get("wips/$wipId/$revisionId");
    }

    public function comments($wipId, $revisionId)
    {
        return $this->get("wips/$wipId/$revisionId/comments");
    }
}
