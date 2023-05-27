<?php

class Controller
{

    public function view(string $view, ?array $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model(string $model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    protected function jsonResponse($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
