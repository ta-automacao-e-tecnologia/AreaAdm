<?php

    // AJAX
    require_once 'action_controller.php';

    // Caso não exista sessão aberta
    if(!isset($_SESSION['email']))
    {
        $db_table = 'usuarios';

        $txt_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $txt_pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

        $control = new controller();
        $login = $control->login($db_table, $txt_email, $txt_pass);

        $arr = json_decode($login, true);

        if (json_last_error() === 0)
        {
            if($arr[0]['email'] == $txt_email)
            {
                session_start();
                $_SESSION['email'] = $arr[0]['email'];
                echo "";
            }
            else
            {
                echo $login;
            }
        }
        else
        {
            echo $login;
        }  
    } 
    else
    {
        echo ""; // Caso já exista sessão aberta
    }