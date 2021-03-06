<?php
/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 11-Jan-16
 * Time: 6:13 PM

|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/
$env = $app->detectEnvironment(function(){
    $environmentPath = __DIR__.'/../.env';
    if (!file_exists($environmentPath)){
        //heroku
        return getenv('APP_ENV') ?: 'production';
    }
    else{
        $setEnv = trim(file_get_contents($environmentPath));

        putenv("APP_ENV=$setEnv");
        if (getenv('APP_ENV') && file_exists(__DIR__.'/../.' .getenv('APP_ENV') .'.env')) {
            $dotenv = new Dotenv\Dotenv(__DIR__ . '/../', '.' . getenv('APP_ENV') . '.env');
            $dotenv->load();
        }
    }
});