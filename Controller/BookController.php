<?php

class BookController implements ControllerInterface
{
    public function execute()
    {
        return BookView::render([
            'books' => Book::getList(),
        ]);
    }

    public function executeOne($id)
    {
        return BookView::renderOne([
            'book' => Book::getById($id),
        ]);
    }
}