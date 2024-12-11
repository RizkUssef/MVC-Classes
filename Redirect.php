<?php

namespace Rizk\Blog\Classes;

class Redirect
{
    public function __construct()
    {
        session_start();
    }
    public static function toRegister()
    {
        Session::csrfToken("csrf_register");
        Header::goTo("http://127.0.0.1/blog%20to%20try/public/register/registerPage");
    }
    public static function toLogin()
    {
        Session::csrfToken("csrf_login");
        Header::goTo("http://localhost/blog%20to%20try/public/login/loginPage");
    }
    public static function toCreate()
    {
        Session::csrfToken("csrf_create");
        Header::goTo("http://localhost/blog%20to%20try/public/create/createPage");
    }
}
