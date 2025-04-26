<?php

declare(strict_types=1);

namespace SmitBackend\EdgeVarnish;

use SmitBackend\EdgeVarnish\Contracts\CacheStorageInterface;

/**
 * Class EdgeCacheManager
 *
 * @package SmitBackend\EdgeVarnish
 */
class EdgeCacheManager implements CacheStorageInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
