<?php
return [
    'backend' => [
        'frontName' => 'admin_1rfqfn'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'unKdrY4g3Q4GPdnld0P3hnRiUqcjI80C'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'fe1_'
            ],
            'page_cache' => [
                'id_prefix' => 'fe1_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'eca0fe591cf0ac644b6ea969ee8d6bb7'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'avatar_db',
                'username' => 'avatar_user',
                'password' => 'Zvyz1R_lc*UX',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'avatar.gen.in'
    ],
    'install' => [
        'date' => 'Fri, 16 Aug 2024 13:01:44 +0000'
    ]
];
