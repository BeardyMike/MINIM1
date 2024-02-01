<?php

/**
 * Class LoginController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace MINIM1\Controller;

class LoginController
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     */
    public function index()
    {
        // Process login form
        if(isset($_POST['user_name']) && isset($_POST['user_password'])){

            // load views, and pass data to views using ['key' => 'value'] syntax
            $_SESSION['user']['name'] = $_POST['user_name'];
            $_SESSION['user']['password'] = $_POST['user_password'];
    
            view('login/success.php', [
                'name' => $_SESSION['user']['name'], 
                'password' => $_SESSION['user']['password']
            ]);
            exit();
        }

        // Return default login view
        view('_templates/header.php', [
            'meta_title' => 'Login',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . 'login'
        ]);
        view('login/index.php');
        view('_templates/footer.php',[
            'page_js' => 'login' 
        ]);
    }

    public function success()
    {
        // get the data from the POST form. store the Email and Password in the $_SESSION variable
        $_SESSION['user']['name'] = $_POST['user_name'];
        $_SESSION['user']['password'] = $_POST['user_password'];

        // load views, and pass data to views using ['key' => 'value', 'key2' => 'value2'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Login',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . 'login/success'
        ]);
        view('login/success.php', [
            'name' => $_SESSION['user']['name'], 
            'password' => $_SESSION['user']['password']
        ]);
        view('_templates/footer.php');
    }
}
