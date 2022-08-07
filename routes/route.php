<?php 
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\PortfoliosController;

SimpleRouter::get('phpmvc/', function() {
    return 'This is Homepage';
});


SimpleRouter::get('phpmvc/portfolio', [PortfoliosController::class, 'index']);


