<?php

ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

$hashedString = ""; // will hold the hashed variable used to verify webhooks

$app = require __DIR__.'/src/app.php';

//require __DIR__.'/config/prod.php';
require __DIR__.'/config/dev.php';
require __DIR__.'/src/helpers.php';
require __DIR__.'/src/controllers.php';

$app->run();
