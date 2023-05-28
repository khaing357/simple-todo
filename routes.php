<?php
use controllers\TaskController;
use controllers\AboutController;
use controllers\ContactController;


    // $router->get("", "TaskController@index");
    // $router->post("tasks", "TaskController@addTask");
    
    // $router->get("about", "AboutController@index");
    // $router->get("contact", "ContactController@index");
    
    $router->get("",[TaskController::class,'index']);
    $router->post("store",[TaskController::class,'addTask']);

    $router->get("about",[AboutController::class,'index']);
    $router->get("contact",[ContactController::class,'index']);
    
    
