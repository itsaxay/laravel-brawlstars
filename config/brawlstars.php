<?php

return [


    /**
     * Brawlstars version
     *
     * Supported: "v1"
     */
    'version' => 'v1',


    /**
     * Brawlstars credentials
     */
    'credentials' => [

        'v1' => [
            'access_key' => env('BRAWLSTAR_ACCESS_KEY', ''),
        ]

    ]

];
