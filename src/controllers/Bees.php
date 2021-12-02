<?php
require_once('./src/models/BeesManager.php');

class Bees
{
    public function getAll()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $model = new \BeesManager();
            $bees = $model->getBees();
            render('index', ['bees' => $bees]);
            return;
        }
    }
}
