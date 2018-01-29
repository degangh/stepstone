<?


$users = App::get("database")->selectAll("users", "User");


require 'view/index.view.php';
