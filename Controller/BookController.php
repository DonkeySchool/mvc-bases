<?php

class BookController implements ControllerInterface
{
    public function execute()
    {
        return BookView::render([
            'books' => Book::getList(),
        ]);
    }
}