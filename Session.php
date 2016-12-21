<?php

    session_start();

    if(!isset($_SESSION['time']))
    {
        $_SESSION['time'] = date("H:i:s");
    }
    echo session_save_path();