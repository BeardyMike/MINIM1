<?php

/**
 * Class error
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace MINIM1\controller;

/**
 * Models
 * This is where you pull the models that are required for this controller
 */
use MINIM1\model\read;

class errorController
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

    /**
     * PAGE: page not found
     * This method handles the error page that will be shown when a page is not found
     */
    public function page_not_found()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Error',
            'meta_description' => 'Page not found',
            'meta_canonical' => URL . "error/page-not-found"
        ]);
        view('error/page_not_found.php');
        view('_templates/footer.php');
    }

     /**
     * PAGE: controller not found
     * This method handles the error page that will be shown when a page is not found
     */
    public function controller_not_found()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Error controller not found',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . "error/controller-not-found"
        ]);
        view('error/page_not_found.php');
        view('_templates/footer.php');
    }

     /**
     * PAGE: Internal server error
     * This method handles the error page that will be shown when a page is not found
     */
    public function error500()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Error controller not found',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . "error/error500"
        ]);
        view('error/page_not_found.php');
        view('_templates/footer.php');
    }
     /**
     * PAGE: page not found
     * This method handles the error page that will be shown when a page is not found
     */
    public function error404()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Error controller not found',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . "error/error404"
        ]);
        view('error/page_not_found.php');
        view('_templates/footer.php');
    }
     /**
     * PAGE: Bad request
     * This method handles the error page that will be shown when a page is not found
     */
    public function error400()
    {
        // load views, and pass data to views using ['key' => 'value'] syntax
        view('_templates/header.php', [
            'meta_title' => 'Error controller not found',
            'meta_description' => 'This the pages meta description',
            'meta_canonical' => URL . "error/error400"
        ]);
        view('error/page_not_found.php');
        view('_templates/footer.php');
    }
}
