<?php


class TodoController {



    public function __construct()
    {
        
    }
    public function getAll(){


    }

    public function createTodos(){



    }

    public function updateTodos(){


        
    }

    public function deleTodos(){


        
    }





}

require_once '../api/model.php';

$model = new model();

$controller = new TodoController($model);

$controller->getAll();