<?php

namespace App\Classes;

use App\Helpers\Helpers;
use App\Classes\JsonRpc\JsonRpcClient;

class ActivityManager {

    protected $client;

    public function __construct(JsonRpcClient $client)
    {
        $this->client = $client;
    }

    public function save(string $url): array{
        return $this->client->send('save', ['route'=>$url, 'ip'=>Helpers::getRealIp()]);
    }
    public function show(int $offset = 0, ?int $limit = null): array{
        return $this->client->send('show', ['offset' => $offset, 'limit'=>$limit]);
    }
}
