<?php

namespace Todos\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Todos\Models\ToDoModel;

class AddToDoController
{
    private $todoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $formInput = $request->getParsedBody();
        $this->toDoModel->addToDo($formInput);
        return $response->withRedirect('/');
    }

}