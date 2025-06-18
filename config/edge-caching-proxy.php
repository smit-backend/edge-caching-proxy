<?php

return [
    'enabled' => env('EDGE_CACHING_PROXY_ENABLED', true),
    'timeout' => env('EDGE_CACHING_PROXY_TIMEOUT', 30),
    'log_channel' => env('EDGE_CACHING_PROXY_LOG', 'stack'),
];
