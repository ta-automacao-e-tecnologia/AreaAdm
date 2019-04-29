<?php

    require_once 'action_controller.php';

    $db_table = 'usuarios';

    $txt_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $txt_pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    $control = new controller();

    $login = $control->login($db_table, $txt_email, $txt_pass);

    if($login == $txt_email)
    {
        session_start();
        $_SESSION['email'] = $login;
    }

    // if(is_object($json))
    // {
    //     $json = json_decode($json);
    //     session_start();
    //     $json = $json->{'email'};
    //     $_SESSION['email'] = 'foi';
    //     $json = "e obj";
    // }
    // else
    // {
    //     $json = "Usuário ou seja incorretos!";
    // }

    echo $login;