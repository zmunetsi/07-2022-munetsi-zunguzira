<?php
// base controller for sorting and displaying string in ascending or descending order
class Controller
{
    public function render($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}