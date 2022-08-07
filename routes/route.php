<?php 
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\WelcomeController;

// SimpleRouter::get('phpmvc/', function() {
//     return 'This is Homepage';
// });

SimpleRouter::get('phpmvc/', [HomeController::class, 'index']);
SimpleRouter::get('phpmvc/about', [AboutController::class, 'index']);
SimpleRouter::get('phpmvc/welcome', [WelcomeController::class, 'index']);





