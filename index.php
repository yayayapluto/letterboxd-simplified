<?php 

require_once("controller/baseController.php");

$Users = new UserController();
echo $Users->deleteUser(["name" => "ikmal"])
?>