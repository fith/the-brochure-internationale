<?php
require __DIR__ . '/../vendor/autoload.php';

use duncan3dc\Laravel\Blade;
use duncan3dc\Laravel\BladeInstance;
use Symfony\Component\Dotenv\Dotenv;

// Initialize the environment variables from the .env file.
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

// Initialize internationalization.
$i18n = new i18n(__DIR__ .'/../src/lang/lang_{LANGUAGE}.ini', __DIR__ .'/../cache/lang', 'en');
$i18n->init();

// Initialize Blade templating.
$views_dir = __DIR__ .'/../src/views/';
$blade = new BladeInstance($views_dir, '../cache/views');
// Determine the page view using the URL.
$default_page = getenv('DEFAULT_PAGE');
$route = ltrim($_SERVER['REQUEST_URI'], '/');
$route_page = str_replace('/', '.', $route);
$page_view = is_file("{$views_dir}/pages/{$route}.blade.php") ? $route_page : $default_page;
// Load the Blade view.
echo $blade->render("pages.{$page_view}");