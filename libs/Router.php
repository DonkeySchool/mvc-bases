<?php

class Router
{
    public function match($url) : array
    {
        if ($url == '/books') {
            return [ 
                'controller' => BookController::class,
            ];
        }

        $matches = [];
        if (preg_match('#^\/books\/(\d+)#', $url, $matches)) {
            return [ 
                'controller' => BookController::class,
                'action'     => 'executeOne',
                'args'       => [
                    'id' => (int) $matches[1],
                ],
            ];
        }
    }
}