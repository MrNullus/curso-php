<?php
class Core {

    public function run() {
        $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        $params = array();
        if ($url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0 && !empty($url[0])) {
                $params = $url;
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);

    }
}