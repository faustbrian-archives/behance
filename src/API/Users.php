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

class Users extends AbstractAPI
{
    public function search(string $q, array $optionals = []): HttpResponse
    {
        return $this->client->get('users', $q + $optionals);
    }

    public function details(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}");
    }

    public function projects(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/projects");
    }

    public function wips(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/wips");
    }

    public function appreciations(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/appreciations");
    }

    public function collections(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/collections");
    }

    public function stats(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/stats");
    }

    public function followers(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/followers");
    }

    public function following(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/following");
    }

    public function work_experience(int $userId): HttpResponse
    {
        return $this->client->get("users/{$userId}/work_experience");
    }
}
