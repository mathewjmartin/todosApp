<?php

namespace ToDos\Factories;

use ToDos\Controllers\SeeAllTodosController;
use Psr\Container\ContainerInterface;

class SeeAllToDosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $toDoModel = $container->get('ToDoModel');
        return new SeeAllTodosController($renderer, $toDoModel);
        // TODO: Implement __invoke() method.
    }
}