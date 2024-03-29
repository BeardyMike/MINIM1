<?php
/** For more info about namespaces plase @see http://php.net/manual/en/language.namespaces.importing.php */
namespace MINIM1\core;

require APP . 'core/corefunctions.php';

class application
{
    /** @var null The controller */
    private $url_controller = null;

    /** @var null The method (of the above controller), often also named "action" */
    private $url_action = null;

    /** @var array URL parameters */
    private $url_params = array();

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // check for controller: no controller given ? then load start-page
        if (!$this->url_controller) {

            $page = new \MINIM1\controller\homeController();
            $page->index();

        }
        elseif (file_exists(APP . 'controller/' . $this->url_controller . 'Controller.php')) {
            // here we did check for controller: does such a controller exist ?

            // if so, then load this file and create this controller
            // like \MINIM1\controller\carController
            $controller = "\\MINIM1\\controller\\" . $this->url_controller . 'Controller';
            $this->url_controller = new $controller();

            // check for method: does such a method exist in the controller ?
            if (method_exists($this->url_controller, (string) $this->url_action)) {

                if (!empty($this->url_params)) {
                    // Call the method and pass arguments to it
                    call_user_func_array(array($this->url_controller, $this->url_action), $this->url_params);
                }
                else {
                    // If no parameters are given, just call the method without parameters, like $this->home->method();
                    if ($this->url_controller !== null) {
                        $this->url_controller->{$this->url_action}();
                    }
                }

            }
            else {
                if (empty($this->url_action)) {
                    // no action defined: call the default index() method of a selected controller
                    if ($this->url_controller !== null) {
                        $this->url_controller->index();
                    }
                }
                else {
                    header('location: ' . URL . 'error/page-not-found');
                }
            }
        }
        else {
            header('location: ' . URL . 'error/controller-not-found');
        }
    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Put URL parts into according properties
            // By the way, the syntax here is just a short form of if/else, called "Ternary Operators"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->url_controller = isset($url[0]) ? str_replace("-", "_", $url[0]) : null;
            $this->url_action = isset($url[1]) ? str_replace("-", "_", $url[1]): null;

            // Remove controller and action from the split URL
            unset($url[0], $url[1]);

            // Rebase array keys and store the URL params
            $this->url_params = array_values($url);

            // for debugging. uncomment this if you have problems with the URL
            //echo 'Controller: ' . $this->url_controller . '<br>';
            //echo 'Action: ' . $this->url_action . '<br>';
            //echo 'Parameters: ' . print_r($this->url_params, true) . '<br>';
        }
    }
}
