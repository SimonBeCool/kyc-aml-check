<?php

$config = new Config();
include $_SERVER['DOCUMENT_ROOT'].$config->read('routing','core').'page.class.php';

/*
    * Route File
*/

class routes
{
    /* Members */
    private $request = null;
    private $routes  = [];
    /*
        * Method to add pages
        * @Parameters: string $className, string $source
    */

    public function addRoute($className, $route, $source, $present, $executable)
    {
        $attributes = array('PRESENT' => $present, 'EXECUTABLE' => $executable);
        $Page = new Page($className, $source, $attributes);
        $this->routes[$route] = $Page;
    }

    /*
        * Method to proceed route request
        * @Parameters string $request
    */

    public function proceed($request)
    {
        if(array_key_exists($request, $this->routes)) {
            $Page = $this->routes[$request];
            $Page->display();
        }
        else {
            http_response_code(404);
            die('Seite nicht gefunden?!');
        }
    }
}

?>
