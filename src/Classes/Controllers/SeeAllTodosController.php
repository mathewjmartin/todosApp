<?php

namespace Todos\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Todos\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class SeeAllTodosController
{
    private $renderer;
    private $todoModel;

    public function __construct(PHPRenderer $renderer, ToDoModel $toDoModel)
    {
        $this->renderer = $renderer;
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['ToDos'] = $this->toDoModel->getAllTodos();

        return $this->renderer->render($response, 'todos.phtml', $args);
        // TODO: Implement __invoke() method.
    }
}