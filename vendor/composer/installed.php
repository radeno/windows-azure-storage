<?php return array(
    'root' => array(
        'pretty_version' => 'dev-develop',
        'version' => 'dev-develop',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '063f5bcf3a9dd2c13d0d36fbb4514ea3587d1c54',
        'name' => '10up/windows-azure-storage',
        'dev' => true,
    ),
    'versions' => array(
        '10up/phpcs-composer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../10up/phpcs-composer',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => '9c085cf0554a0b5311623548663aa9e4d8f52587',
            'dev_requirement' => true,
        ),
        '10up/windows-azure-storage' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '063f5bcf3a9dd2c13d0d36fbb4514ea3587d1c54',
            'dev_requirement' => false,
        ),
        'automattic/vipwpcs' => array(
            'pretty_version' => '2.3.3',
            'version' => '2.3.3.0',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../automattic/vipwpcs',
            'aliases' => array(),
            'reference' => '6cd0a6a82bc0ac988dbf9d6a7c2e293dc8ac640b',
            'dev_requirement' => true,
        ),
        'dealerdirect/phpcodesniffer-composer-installer' => array(
            'pretty_version' => 'v0.7.2',
            'version' => '0.7.2.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../dealerdirect/phpcodesniffer-composer-installer',
            'aliases' => array(),
            'reference' => '1c968e542d8843d7cd71de3c5c9c3ff3ad71a1db',
            'dev_requirement' => true,
        ),
        'guzzlehttp/guzzle' => array(
            'pretty_version' => '7.7.x-dev',
            'version' => '7.7.9999999.9999999-dev',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/guzzle',
            'aliases' => array(),
            'reference' => 'fb7566caccf22d74d1ab270de3551f72a58399f5',
            'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => array(
            'pretty_version' => '2.0.x-dev',
            'version' => '2.0.9999999.9999999-dev',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/promises',
            'aliases' => array(),
            'reference' => '4a94655427efd6906ed3eb628c79693291264713',
            'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => array(
            'pretty_version' => '2.6.x-dev',
            'version' => '2.6.9999999.9999999-dev',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/psr7',
            'aliases' => array(),
            'reference' => 'b635f279edd83fc275f822a1188157ffea568ff6',
            'dev_requirement' => false,
        ),
        'microsoft/azure-storage-blob' => array(
            'pretty_version' => '1.5.3',
            'version' => '1.5.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../microsoft/azure-storage-blob',
            'aliases' => array(),
            'reference' => '9aec3e152dab8cd9ec64fd89ed71129a0402c4be',
            'dev_requirement' => false,
        ),
        'microsoft/azure-storage-common' => array(
            'pretty_version' => '1.5.2',
            'version' => '1.5.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../microsoft/azure-storage-common',
            'aliases' => array(),
            'reference' => '8ca7b1bf4c9ca7c663e75a02a0035b05b37196a0',
            'dev_requirement' => false,
        ),
        'phpcompatibility/php-compatibility' => array(
            'pretty_version' => '9.3.5',
            'version' => '9.3.5.0',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/php-compatibility',
            'aliases' => array(),
            'reference' => '9fb324479acf6f39452e0655d2429cc0d3914243',
            'dev_requirement' => true,
        ),
        'phpcompatibility/phpcompatibility-paragonie' => array(
            'pretty_version' => '1.3.2',
            'version' => '1.3.2.0',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/phpcompatibility-paragonie',
            'aliases' => array(),
            'reference' => 'bba5a9dfec7fcfbd679cfaf611d86b4d3759da26',
            'dev_requirement' => true,
        ),
        'phpcompatibility/phpcompatibility-wp' => array(
            'pretty_version' => '2.1.4',
            'version' => '2.1.4.0',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/phpcompatibility-wp',
            'aliases' => array(),
            'reference' => 'b6c1e3ee1c35de6c41a511d5eb9bd03e447480a5',
            'dev_requirement' => true,
        ),
        'psr/http-client' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-client',
            'aliases' => array(
                0 => '1.0.x-dev',
            ),
            'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
            'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/http-factory' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-factory',
            'aliases' => array(
                0 => '1.0.x-dev',
            ),
            'reference' => '6d70f402f0eddb2b154b22950b5381bbf5b28469',
            'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/http-message' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-message',
            'aliases' => array(
                0 => '2.0.x-dev',
            ),
            'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
            'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'ralouphie/getallheaders' => array(
            'pretty_version' => '3.0.3',
            'version' => '3.0.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ralouphie/getallheaders',
            'aliases' => array(),
            'reference' => '120b605dfeb996808c31b6477290a714d356e822',
            'dev_requirement' => false,
        ),
        'sirbrillig/phpcs-variable-analysis' => array(
            'pretty_version' => '2.x-dev',
            'version' => '2.9999999.9999999.9999999-dev',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../sirbrillig/phpcs-variable-analysis',
            'aliases' => array(),
            'reference' => 'dc5582dc5a93a235557af73e523c389aac9a8e88',
            'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.7.1',
            'version' => '3.7.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'reference' => '1359e176e9307e906dc3d890bcc9603ff6d90619',
            'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => '3.0.x-dev',
            'version' => '3.0.9999999.9999999-dev',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'reference' => 'c30dd04b9a303689a26d7986f7cffce04203a107',
            'dev_requirement' => false,
        ),
        'wp-coding-standards/wpcs' => array(
            'pretty_version' => '2.3.0',
            'version' => '2.3.0.0',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wp-coding-standards/wpcs',
            'aliases' => array(),
            'reference' => '7da1894633f168fe244afc6de00d141f27517b62',
            'dev_requirement' => true,
        ),
    ),
);
