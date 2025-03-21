<?php

declare(strict_types=1);

namespace SmitBackend\EdgeVarnish\Contracts;

/**
 * Interface CacheStorageInterface
 *
 * @package SmitBackend\EdgeVarnish
 */
interface CacheStorageInterface
{
    public function execute(array $payload = []): mixed;
}
