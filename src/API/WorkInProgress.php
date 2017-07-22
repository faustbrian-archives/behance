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

class WorkInProgress extends AbstractAPI
{
    public function search(string $q, array $optionals = []): HttpResponse
    {
        return $this->client->get('wips', $q + $optionals);
    }

    public function details(int $wipId): HttpResponse
    {
        return $this->client->get("wips/{$wipId}");
    }

    public function revision(int $wipId, int $revisionId): HttpResponse
    {
        return $this->client->get("wips/{$wipId}/{$revisionId}");
    }

    public function comments(int $wipId, int $revisionId): HttpResponse
    {
        return $this->client->get("wips/{$wipId}/{$revisionId}/comments");
    }
}
