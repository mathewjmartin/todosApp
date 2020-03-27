<?php

namespace ToDos\Factories;

use ToDos\Models\TodoModel;
use Psr\Container\ContainerInterface;

class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbConn = $container->get('dbConnection');
        return new TodoModel($dbConn);
        // TODO: Implement __invoke() method.
    }
}