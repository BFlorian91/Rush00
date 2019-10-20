<?php
    require "../view/error.php";

    function auth($login, $passwd) 
    {
        $accounts = unserialize(file_get_contents("../private/passwd"));
        if ($accounts) 
        {
            foreach ($accounts as $key => $val) 
                if ($val['login'] == $login && $val['passwd'] == hash("whirlpool", $passwd))
                {
                    if ($val['ban'])
                    {
                        user_is_ban();
                        return false;
                    }
                    return true;
                }
            return false;
        }
        return false;
    }