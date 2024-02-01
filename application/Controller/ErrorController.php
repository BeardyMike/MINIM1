<?php

/**
 * Class Error
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace MINIM1\Controller;

class ErrorController
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     */
    public function index()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Error',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . "error"
        ]);
        view('error/index.php');
        view('_templates/footer.php');
    }
}
