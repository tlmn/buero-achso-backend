<?php
include 'env.php';

return [
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => true,
    ],
    'thumbs' => [
        'srcsets' => [
            'default' => [300, 800, 1024],
        ],
    ],
    'pju.webhook-field.hooks' => [
        'production' => [
            'url' => $DEPLOY_HOOK,
        ],
    ],
];
