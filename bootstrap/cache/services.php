<?php return array (
  'providers' => 
  array (
    0 => 'Collective\\Bus\\BusServiceProvider',
    1 => 'Collective\\Html\\HtmlServiceProvider',
    2 => 'Yajra\\Datatables\\DatatablesServiceProvider',
    3 => 'Illuminate\\Foundation\\Providers\\ArtisanServiceProvider',
    4 => 'Illuminate\\Auth\\AuthServiceProvider',
    5 => 'Illuminate\\Bus\\BusServiceProvider',
    6 => 'Illuminate\\Cache\\CacheServiceProvider',
    7 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    8 => 'Illuminate\\Cookie\\CookieServiceProvider',
    9 => 'Illuminate\\Database\\DatabaseServiceProvider',
    10 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    11 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    12 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    13 => 'Illuminate\\Hashing\\HashServiceProvider',
    14 => 'Illuminate\\Mail\\MailServiceProvider',
    15 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    16 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    17 => 'Illuminate\\Queue\\QueueServiceProvider',
    18 => 'Illuminate\\Redis\\RedisServiceProvider',
    19 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    20 => 'Illuminate\\Session\\SessionServiceProvider',
    21 => 'Illuminate\\Translation\\TranslationServiceProvider',
    22 => 'Illuminate\\Validation\\ValidationServiceProvider',
    23 => 'Illuminate\\View\\ViewServiceProvider',
    24 => 'App\\Providers\\AppServiceProvider',
    25 => 'App\\Providers\\BusServiceProvider',
    26 => 'App\\Providers\\ConfigServiceProvider',
    27 => 'App\\Providers\\EventServiceProvider',
    28 => 'App\\Providers\\RouteServiceProvider',
    29 => 'Propaganistas\\LaravelPhone\\LaravelPhoneServiceProvider',
    30 => 'Bugsnag\\BugsnagLaravel\\BugsnagLaravelServiceProvider',
    31 => 'Vsmoraes\\Pdf\\PdfServiceProvider',
    32 => 'Thomaswelton\\LaravelGravatar\\LaravelGravatarServiceProvider',
    33 => 'Chumper\\Zipper\\ZipperServiceProvider',
    34 => 'Bestmomo\\Filemanager\\FilemanagerServiceProvider',
    35 => 'Unisharp\\Laravelfilemanager\\LaravelFilemanagerServiceProvider',
    36 => 'Intervention\\Image\\ImageServiceProvider',
    37 => 'Tymon\\JWTAuth\\Providers\\JWTAuthServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Yajra\\Datatables\\DatatablesServiceProvider',
    1 => 'Illuminate\\Auth\\AuthServiceProvider',
    2 => 'Illuminate\\Cookie\\CookieServiceProvider',
    3 => 'Illuminate\\Database\\DatabaseServiceProvider',
    4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    5 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    6 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Session\\SessionServiceProvider',
    9 => 'Illuminate\\View\\ViewServiceProvider',
    10 => 'App\\Providers\\AppServiceProvider',
    11 => 'App\\Providers\\BusServiceProvider',
    12 => 'App\\Providers\\ConfigServiceProvider',
    13 => 'App\\Providers\\EventServiceProvider',
    14 => 'App\\Providers\\RouteServiceProvider',
    15 => 'Propaganistas\\LaravelPhone\\LaravelPhoneServiceProvider',
    16 => 'Bugsnag\\BugsnagLaravel\\BugsnagLaravelServiceProvider',
    17 => 'Vsmoraes\\Pdf\\PdfServiceProvider',
    18 => 'Thomaswelton\\LaravelGravatar\\LaravelGravatarServiceProvider',
    19 => 'Chumper\\Zipper\\ZipperServiceProvider',
    20 => 'Bestmomo\\Filemanager\\FilemanagerServiceProvider',
    21 => 'Unisharp\\Laravelfilemanager\\LaravelFilemanagerServiceProvider',
    22 => 'Intervention\\Image\\ImageServiceProvider',
    23 => 'Tymon\\JWTAuth\\Providers\\JWTAuthServiceProvider',
  ),
  'deferred' => 
  array (
    'Collective\\Bus\\Dispatcher' => 'Collective\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'html' => 'Collective\\Html\\HtmlServiceProvider',
    'form' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\HtmlBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\FormBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'command.clear-compiled' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.resets.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.down' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.environment' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.key.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.optimize' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.list' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.tinker' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.up' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.cache.clear' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.rollback' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.reset' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.refresh' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.install' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.status' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'seeder' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.flush' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.transport' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.work' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.listen' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.restart' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
  ),
  'when' => 
  array (
    'Collective\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Collective\\Html\\HtmlServiceProvider' => 
    array (
    ),
    'Illuminate\\Foundation\\Providers\\ArtisanServiceProvider' => 
    array (
    ),
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => 
    array (
    ),
    'Illuminate\\Translation\\TranslationServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
  ),
);