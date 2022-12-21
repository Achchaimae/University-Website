<?php
//define("PROJ_DIR", dirname(__FILE__));
require_once 'Controller/LoginController.php';

require_once 'Model/LoginModel.php';


$LoginModel = new LoginModel();

if (isset($_GET["a"])) {
    if ($_GET["a"] == "log") {
        $loginController->logout();
        require_once 'View/home.php';
    }
}

//test login
if (isset($_POST["email"]) && isset($_POST["password"])) {
    //     echo "inside";
    session_start();
    $login = $_POST["email"];
    $password = $_POST["password"];
    $loginController->direction($login, $password);
    if ($loginController == true) {
        $_SESSION["login"] = $login;
        header("location:View/home.php");
        //   include_once "View/admin.php";
    } else {
        include_once "View/home.php";
    }
} else {
    include_once "View/home.php";
}
