<?php
namespace controllers;

use core\App;

class TaskController
    {
        public function index()
        {
            $tasks=App::get("database")->selectAll("tasks");
            view("index",[
                "tasks"=>$tasks
            ]);
        }

        public function addTask()
        {
            App::get("database")->insert([
                'description'=>request("task"),
                'complete'=>request("complete")
            ], "tasks");
           redirect("/");
        }
    }