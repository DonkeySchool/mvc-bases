<?php

class Router
{
    public function dispatch($url) : ControllerInterface
    {
        if ($url == '/books') {
            return new BookController();
        }
    }
}