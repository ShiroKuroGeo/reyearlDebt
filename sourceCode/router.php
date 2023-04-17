<?php
session_start();
require("backend.php");
if (isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 'doLoginThisUser':
            $backend = new backend();
            echo $backend->doLogin($_POST['Username'], $_POST['Password'],$_POST['Role']);
            break;
        case 'registerThisUser':
            $backend = new backend();
            echo $backend->doRegister($_POST['Firstname'], $_POST['Lastname'], $_POST['Username'], $_POST['Email'], $_POST['Password'],$_POST['Role']);
            break;
        case 'logout':
            session_unset();
            session_destroy();
            echo "200";
            break;
        default:
            echo "404";
            break;
    }
}