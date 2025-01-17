<?php

/**
 * Filesystem configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // Default Filesystem Disk
    // Options: local, local_secure, s3
    'default' => env('STORAGE_TYPE', 'local'),

    // Filesystem to use specifically for image uploads.
    'images' => env('STORAGE_IMAGE_TYPE', env('STORAGE_TYPE', 'local')),

    // Filesystem to use specifically for file attachments.
    'attachments' => env('STORAGE_ATTACHMENT_TYPE', env('STORAGE_TYPE', 'local')),

    // Storage URL
    // This is the url to where the storage is located for when using an external
    // file storage service, such as s3, to store publicly accessible assets.
    'url' => env('STORAGE_URL', false),

    // Default Cloud Filesystem Disk
    'cloud' => 's3',

    // Available filesystem disks
    // Only local, local_secure & s3 are supported by BookStack
    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => public_path(),
        ],

        'local_secure' => [
            'driver' => 'local',
            'root'   => storage_path(),
        ],

        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'ftp.example.com',
            'username' => 'your-username',
            'password' => 'your-password',
        ],

        's3' => [
            'driver' => 's3',
//            'key'    => env('STORAGE_S3_KEY', 'your-key'),
//            'secret' => env('STORAGE_S3_SECRET', 'your-secret'),
            'region' => env('STORAGE_S3_REGION', 'your-region'),
            'bucket' => env('STORAGE_S3_BUCKET', 'your-bucket'),
            'endpoint' => env('STORAGE_S3_ENDPOINT', null),
            'use_path_style_endpoint' => env('STORAGE_S3_ENDPOINT', null) !== null,
        ],

        'rackspace' => [
            'driver'    => 'rackspace',
            'username'  => 'your-username',
            'key'       => 'your-key',
            'container' => 'your-container',
            'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
            'region'    => 'IAD',
            'url_type'  => 'publicURL',
        ],

    ],

];
