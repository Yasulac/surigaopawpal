<?php

return [
    'supports_credentials' => true,
    'allowed_origins' => ['*'], // Or specify your frontend's domain
    'allowed_methods' => ['*'],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
];
