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
            render('read', ['bees' => $bees]);
            return;
        }

    }

    public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new \BeesManager();
            $bees = $model->create();
        }
    }
}
?>