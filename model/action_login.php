<?php
    session_start();

    include "action_auth.php";

    if ($_POST["login"] && $_POST["passwd"] && auth($_POST["login"], $_POST["passwd"])) {
        $_SESSION["loggued_on_user"] = $_POST["login"];
        header("location: /index.php");
    } else {
        $_SESSION["loggued_on_user"] = "";
        echo "ERROR" . PHP_EOL;
    }