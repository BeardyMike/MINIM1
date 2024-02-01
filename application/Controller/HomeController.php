<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace MINIM1\Controller;

class HomeController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', ['meta_title' => 'Home']);
        view('home/index.php');
        view('_templates/footer.php');
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleOne()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', ['meta_title' => 'PageOne']);
        view('home/example_one.php');
        view('_templates/footer.php');
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleTwo()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', ['meta_title' => 'PageTwo']);
        view('home/example_two.php');
        view('_templates/footer.php');
    }
}
