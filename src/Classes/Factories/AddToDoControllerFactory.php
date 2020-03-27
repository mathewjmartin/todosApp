<?php

namespace ToDos\Factories;

use Psr\Container\ContainerInterface;
use Todos\Models\TodoModel;
use ToDos\Controllers\AddToDoController;

class AddToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbConnection = $container->get('dbConnection');
        return new TodoModel($dbConnection);
        // TODO: Implement __invoke() method.
    }
}