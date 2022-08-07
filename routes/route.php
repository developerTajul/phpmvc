<?php 
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\HomeController;
use App\Controllers\AboutController;

// SimpleRouter::get('phpmvc/', function() {
//     return 'This is Homepage';
// });

SimpleRouter::get('phpmvc/', [HomeController::class, 'index']);
SimpleRouter::get('phpmvc/about', [AboutController::class, 'index']);





