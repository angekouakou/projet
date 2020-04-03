<?php
require_once "Database.php";

class model
{

    public function getTodos(){

        $pdo = $this->getconnection();
        $query = 'SELECT * FROM todos';

        $pdostatement = $pdo->prepare($query);
        
        $pdostatement->execute();

      //  print_r($pdostatement->fetchAll());
      return $pdostatement->fetchAll();


    }

    public function createTodos($todo){

        $pdo = $this->getconnection();
        $query = 'INSERT INTO todos (title, description) 
        VALUES (:title, :description)';

        $pdostatement = $pdo->prepare($query);
        
      return  $pdostatement-> execute($todo);
 


    }


    private function getconnection()
    {
        $db = new Database();

        return $db->connect();
    }




    public function deleteTodos($todos){
        $pdo = $this->getconnection();
        $query = 'DELETE FROM todos Where id=:id';
        $pdostatement = $pdo->prepare($query);
        
        $values = [
            'id' => $todos['id'],
        ];
        return  $pdostatement-> execute();


    }
    
}


$model =new model();
$model->getTodos();

$response = $model-> createTodos ([
    'title'=>'test de la',
    'description'=>'t'
]);

$response= $model->deleteTodos([
    'id' =>'3',
    ]);
