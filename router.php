<?php
require_once './src/controllers/Bees.php';

class Router
{
	public function run() {
		$route = $_GET['route'] ?? null;
		$action = $_GET ['action'] ?? null;
		if (isset($_GET ['route'])) {
			if ('post' === $route && $action) {
                $Bees = new Bees();
                if ('create' === $action) {
                    return $Bees->create(); }
                elseif ('read' === $action) {
                  	return $Bees->getAll();
         		}
         		elseif ('delete' === $action && isset($_GET['id'])) {
         			return $Bees->delete($_GET['id']);
         		}
			}
		}
		else {
			var_dump("erreur le reuf"); // renvoie acceuil todo
		}
	}
}

?>
