<?php
/*
 * Class ajaxController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
*/

namespace MINIM1\controller;

class ajaxController
{
    /*
     * PAGE: create
     * This method handles the ajax calls for create functions and the returns a message or page output
    */
    public function create($section="", $action="", $var1="", $var2="", $var3="")
    {
        // Do create stuff
    }

    /*
     * PAGE: create
     * This method handles the ajax calls for read functions and the returns a message or page output
    */
    public function read($section="", $action="", $var1="", $var2="", $var3="")
    {
        // Do read stuff
        if ($section=="get-homepage"){
            echo "YOU ARE ON THE HOMEPAGE";
        }
    }

    /*
     * PAGE: read
     * This method handles the ajax calls for update functions and the returns a message or page output
    */
    public function update($section="", $action="", $var1="", $var2="", $var3="")
    {
       // Do update stuff
    }

    /*
     * PAGE: delete
     * This method handles the ajax calls for delete functions and the returns a message or page output
    */
    public function delete($section="", $action="", $var1="", $var2="", $var3="")
    {
        // Do delete stuff
    }
}
