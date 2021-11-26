<?php

class AppController
{
    public static function index()
    {
        $books=Book::ReadAll();
        
        include( VIEWS . 'app/home.php');
    }
}