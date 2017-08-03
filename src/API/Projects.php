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

class Projects extends AbstractAPI
{
    public function search(?string $q = null, array $optionals = []): HttpResponse
    {
        $parameters = compact('q');

        if (! empty($optionals)) {
            $parameters = array_merge($q, $optionals);
        }

        return $this->client->get('projects');
    }

    public function details(int $projectId): HttpResponse
    {
        return $this->client->get("projects/{$projectId}");
    }

    public function comments(int $projectId): HttpResponse
    {
        return $this->client->get("projects/{$projectId}/comments");
    }
}
