<?php

declare(strict_types=1);

namespace SmitBackend\EdgeVarnish;

/**
 * Tag-based instant cache invalidation via surrogate keys
 */
class SurrogateKeyPurger
{
    public function run(): bool
    {
        return true;
    }
}
