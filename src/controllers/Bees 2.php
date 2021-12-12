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
            header('Location: /DevWeb/index.php?route=post&action=read');
        }
    }

    public function delete(int $id){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $model = new \BeesManager();
            $bees = $model->delete($id);
            header('Location: /DevWeb/index.php?route=post&action=read');
        }
    }

    public function update(int $id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new \BeesManager();
            $bees = $model->update($id);
            header('Location: /DevWeb/index.php?route=post&action=read');
        }
    }
}
?>