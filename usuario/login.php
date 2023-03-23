<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once '../connection.php';
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $my_query = "select * from usuario where correo = '".$correo."' and password = '".$password."'";
        include_once('../generical_return.php');
    }
?>