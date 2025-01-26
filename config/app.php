<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    |
    | By uncommenting the Laravel Echo configuration, you may connect Filament
    | to any Pusher-compatible websockets server.
    |
    | This will allow your users to receive real-time notifications.
    |
    */

    'broadcasting' => [

        // Uncomment and configure the following block if using Laravel Echo and Pusher
        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('PUSHER_APP_KEY'),
        //     'cluster' => env('PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('PUSHER_HOST', '127.0.0.1'),
        //     'wsPort' => env('PUSHER_PORT', 6001),
        //     'wssPort' => env('PUSHER_PORT', 6001),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Filament will use to store files. You may use
    | any of the disks defined in the `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Assets Path
    |--------------------------------------------------------------------------
    |
    | This is the directory where Filament's assets will be published to. It
    | is relative to the `public` directory of your Laravel application.
    |
    | After changing the path, you should run `php artisan filament:assets`.
    |
    */

    'assets_path' => 'filament-assets', // Custom assets path

    /*
    |--------------------------------------------------------------------------
    | Cache Path
    |--------------------------------------------------------------------------
    |
    | This is the directory that Filament will use to store cache files that
    | are used to optimize the registration of components.
    |
    | After changing the path, you should run `php artisan filament:cache-components`.
    |
    */

    'cache_path' => base_path('bootstrap/cache/filament'),

    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    |
    | This sets the delay before loading indicators appear.
    |
    | Setting this to 'none' makes indicators appear immediately, which can be
    | desirable for high-latency connections. Setting it to 'default' applies
    | Livewire's standard 200ms delay.
    |
    */

    'livewire_loading_delay' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Admin Path
    |--------------------------------------------------------------------------
    |
    | This sets the URL path for the Filament admin panel.
    | Adjust it to the desired path for accessing the admin panel.
    |
    */

    'path' => 'admin', // Default path for Filament admin panel

    /*
    |--------------------------------------------------------------------------
    | Middleware Stack
    |--------------------------------------------------------------------------
    |
    | Define the middleware stack used for the Filament admin panel routes.
    | You can add or customize the middleware here.
    |
    */

    'middleware' => [
        'web',       // Provides session state, CSRF protection, etc.
        'auth',      // Ensures only authenticated users can access the admin panel
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Guard
    |--------------------------------------------------------------------------
    |
    | This specifies the authentication guard used for the admin panel.
    | Ensure this matches the guard your application uses for admin users.
    |
    */

    'auth_guard' => 'web', // Default guard

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Role Check
    |--------------------------------------------------------------------------
    |
    | If you are using roles, you can add a middleware to ensure only users
    | with the correct role can access the Filament admin panel.
    |
    */

    'role_check' => [
        'admin', // Replace with your role name if needed
    ],
];
