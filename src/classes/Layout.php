<?php

namespace src\classes;

class Layout{

    private $view;

    public function add($view)
    {
        $this->view = $view;
    }

    public function load()
    {
        return "../src/views/{$this->view}.php";
    }

    public function master($master)
    {
        return "../src/views/{$master}.php";
    }
}
