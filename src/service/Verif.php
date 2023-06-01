<?php

class Verif
{
    public static function admin()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != "ROLE_ADMIN"){
            header('location:' . BASE);
        exit();

        }

            

        
    }
}


