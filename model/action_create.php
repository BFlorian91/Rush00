<?php

    require_once "../view/error.php";

    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit']) 
    {
        $user['login'] = $_POST['login'];
        $user['passwd'] = hash('Whirlpool', $_POST['passwd']);
        $user['ban'] = 0;

        if (!file_exists('../private')) 
            mkdir('../private', 0755);
        if (!file_exists('../private/passwd'))
            file_put_contents('../private/passwd', null);

        $accounts= unserialize(file_get_contents('../private/passwd'));
        if ($accounts) 
        {
            $exist = false;
            foreach ($accounts as $key => $val) 
                if ($val['login'] == $user['login']) 
                    $exist = true;
        }
        if ($exist || $_POST['login'] === "unsubscribe") 
            user_already_taken();
        else 
        {
            $accounts[] = $user;
            file_put_contents('../private/passwd', serialize($accounts));
            user_not_found();
        }
    } 
    else
       user_information_missing(); 