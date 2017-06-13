<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

//                echo 'Request: ', $uri, '<br>';
//                echo 'Pattern: ', $uriPattern, '<br>';
//                echo 'Hadler: ', $path, '<br>';

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

//                echo 'Need internal addres: ' . $internalRoute . '<br>';

                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                $parameters = $segments;

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                $controllerObject = new $controllerName();
                $result = call_user_func_array( array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }

    /**
     * Return request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}
