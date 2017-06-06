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

class Users extends AbstractApi
{
    protected $namespace = 'users';

    public function search($q, $optionals = [])
    {
        $this->setQuery(array_merge($q, $optionals));

        return $this->get('users');
    }

    public function details($userId)
    {
        return $this->get("users/$userId");
    }

    public function projects($userId)
    {
        return $this->get("users/$userId/projects");
    }

    public function wips($userId)
    {
        return $this->get("users/$userId/wips");
    }

    public function appreciations($userId)
    {
        return $this->get("users/$userId/appreciations");
    }

    public function collections($userId)
    {
        return $this->get("users/$userId/collections");
    }

    public function stats($userId)
    {
        return $this->get("users/$userId/stats");
    }

    public function followers($userId)
    {
        return $this->get("users/$userId/followers");
    }

    public function following($userId)
    {
        return $this->get("users/$userId/following");
    }

    public function work_experience($userId)
    {
        return $this->get("users/$userId/work_experience");
    }
}
