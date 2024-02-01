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

class AjaxController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function create($section="", $action="", $var1="", $var2="", $var3="")
    {
        // Do create stuff
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function read($section="", $action="", $var1="", $var2="", $var3="")
    {
        // Do read stuff
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function update($section="", $action="", $var1="", $var2="", $var3="")
    {
       // Do update stuff
    }

    /**
     * PAGE: delete
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function delete($section="", $action="", $var1="", $var2="", $var3="")
    {
        // Do delete stuff
    }
}
