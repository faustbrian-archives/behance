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

class Collections extends AbstractAPI
{
    public function search(string $q, array $optionals = []): HttpResponse
    {
        return $this->client->get('collections/', $q + $optionals);
    }

    public function details(int $collectionId): HttpResponse
    {
        return $this->client->get("collections/{$collectionId}");
    }

    public function projects(int $collectionId, array $parameters = []): HttpResponse
    {
        return $this->client->get("collections/{$collectionId}/projects", $parameters);
    }
}
